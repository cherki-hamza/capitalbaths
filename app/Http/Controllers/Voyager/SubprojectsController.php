<?php

namespace App\Http\Controllers\Voyager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use TCG\Voyager\Facades\Voyager;

class SubprojectsController extends Controller
{

    public function update(Request $request, $id)
    {
        $dataType = Voyager::model('DataType')->where('slug', '=', 'subprojects')->first();

        // Validate and update the model
        $dataTypeContent = Voyager::model('Subproject')->findOrFail($id);
        $this->authorize('edit', $dataTypeContent);

        // Perform validation
        $validator = Validator::make($request->all(), $dataType->editRows);
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update the data
        $dataTypeContent->update($request->all());

        // Custom redirection after save
        return redirect()->back()->with([
            'message'    => __('voyager::generic.successfully_updated'),
            'alert-type' => 'success',
        ]);
    }

}
