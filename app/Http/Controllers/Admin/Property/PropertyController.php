<?php

namespace App\Http\Controllers\Admin\Property;

use App\Models\Property\Property;
use App\Models\PropertyType\PropertyType;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{

    public function __construct() {
        $this->model = new Property();
    }

    public function index() {
        return view('admin.property.property');
    }

    public function add() {
        $types = PropertyType::where('is_active', 1)->get();
        return view('admin.property.new', ['types' => $types]);
    }

    public function edit($id) {
        $types = PropertyType::where('is_active', 1)->get();
        $property = Property::findOrfail($id);
        return view('admin.property.edit', ['property' => $property, 'types' => $types]);
    }

    /**
     * Create or update property type
     *
     * @param Request $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function save(Request $request) {
        $saveTarget = $request->get('save');
        $closed = false;

        if (! $saveTarget) {
            $closed = true;
        }

        $id = null;

        if ($request->get('_edit')) {
            $id = $request->get('id');
            $redirect = 'admin/property/edit/' . $request->get('id');
        }

        /** Form request */
        $this->validations = Validator::make($request->all(), Property::validationRule($id), Property::validationMessage());

        if ($this->validations->fails()) {
            return redirect($redirect)->withErrors($this->validations->errors())->withInput();
        }

        if ($id) {
            $this->model = Property::findOrFail($request->get('id'));
        }

        $lat = $request->get('lat');
        $lng = $request->get('lng');

        $this->model->name = $request->get('name');
        $this->model->description = $request->get('description');
        $this->model->property_type_id = $request->get('property_type_id');

        if ($lat && $lat) {
            $this->model->gps = $lat . ',' . $lng;
        }

        $this->model->save();

        $redirect = 'admin/property';
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
        $property = Property::with([
            'PropertyType' => function ($q) {
                $q->where('is_active', 1);
            }
        ])->where('is_active', 1);

        if ($request->get('filters')) {
            $filter = $request->get('filters');
            $field = $filter[0]['field'];
            $value = $filter[0]['value'];
            $operator = $filter[0]['type'];
            $value = $operator == 'like' ? '%' . $value . '%' : $value;
            $property = $property->where($field, $operator, $value);
        }

        $properties = $property->orderBy('created_at', 'desc')
            ->paginate($this->limit);

        return response()->json($properties);

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
                Property::where('id', $i)->update(['is_active' => 0]);
            }

            $message = trans('validation.success');
            $ok = true;
        }

        return response()->json(['ok' => $ok, 'message' => $message]);
    }
}
