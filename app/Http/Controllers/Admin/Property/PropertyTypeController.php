<?php

namespace App\Http\Controllers\Admin\Property;

use App\Models\PropertyType\PropertyType;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PropertyTypeController extends Controller
{

    public function __construct() {
        $this->model = new PropertyType();
    }

    /**
     * Get list of property type
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        return view('admin.property.property-type');
    }

    /**
     * Get add form
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add() {
        return view('admin.property.type.new');
    }

    /**
     * Get edit form
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id) {
        $type = PropertyType::findOrFail($id);
        return view('admin.property.type.edit', ['type' => $type]);
    }

    /**
     * Create or update property type
     *
     * @param Request $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function save(Request $request) {

        /** Ajax request  */
        if ($request->ajax()) {
            try {
                $description = $request->get('description');
                $id = $request->get('id');
                $name = $request->get('name');

                $message = ['message' => trans('validation.oop'), 'ok' => false];

                if (PropertyType::where('id', $id)->update([
                    'name' => $name,
                    'description' => $description
                ])) {
                    $message = ['message' => trans('validation.success'), 'ok' => true];
                }

            } catch (QueryException $e) {
                $message = ['message' => $e->getMessage(), 'ok' => false];
            }

            return response()->json($message);
        }

        $saveTarget = $request->get('save');
        $closed = false;

        if (! $saveTarget) {
            $closed = true;
        }

        $id = null;

        if ($request->get('_edit')) {
            $id = $request->get('id');
            $redirect = 'admin/property/type/edit/' . $id;
        }

        /** Form request */
        $this->validations = Validator::make($request->all(), PropertyType::validationRule($id), PropertyType::validationMessage());

        if ($this->validations->fails()) {
            return redirect($redirect)->withErrors($this->validations->errors())->withInput();
        }

        if ($request->get('id')) {
            $this->model = PropertyType::findOrFail($request->get('id'));
        }

        $this->model->name = $request->get('name');
        $this->model->description = $request->get('description');
        $this->model->save();

        $redirect = 'admin/property/type';
        $redirect = $closed ? $redirect : $redirect . '/new';

        return redirect($redirect)->with('success', trans('validation.success'));
    }

    /**
     *
     * Populate list in tabular
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getList(Request $request) {
        $this->limit = $request->get('size');
        $propertyTypes = PropertyType::where('is_active', 1);

        if ($request->get('filters')) {
            $filter = $request->get('filters');
            $field = $filter[0]['field'];
            $value = $filter[0]['value'];
            $operator = $filter[0]['type'];
            $propertyTypes = $propertyTypes->where($field, $operator, $value);
        }

        $propertyTypes = $propertyTypes->orderBy('created_at', 'desc')
            ->paginate($this->limit);

        return response()->json($propertyTypes);

    }

    /**
     * Deactivate property type
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function deactivate(Request $request) {
        $id = $request->get('id');
        $ok = false;
        $message = trans('validation.oop');
        if (is_array($id)) {
            foreach ($id as $i) {
                PropertyType::where('id', $i)->update(['is_active' => 0]);
            }

            $message = trans('validation.success');
            $ok = true;
        }

        return response()->json(['ok' => $ok, 'message' => $message]);
    }
}
