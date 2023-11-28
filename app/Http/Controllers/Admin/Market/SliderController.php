<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use App\Http\Requests\Market\SliderRequest;
use App\Http\Services\Image\ImageService;
use App\Models\Market\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPageItems = (int)request('paginate') !== 0 ? (int)request('paginate') : 10;

        $sliders = Slider::latest()->paginate($perPageItems);

        return view('admin.market.slider.index' , compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.market.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request , ImageService $imageService)
    {
        $inputs = $request->all();
         // save image
         if ($request->hasFile('image')) {
            $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . "content" . DIRECTORY_SEPARATOR . "sliders");
            $inputs['image'] = $imageService->save($inputs['image']);
        }
        $slider = Slider::create($inputs);                                                                                                
        return to_route('admin.market.sliders.index')->with('success', "اسلایدر مورد نظر با موفقیت ایجاد شد.");

    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.market.slider.edit' , compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider , ImageService $imageService)
    {
        $inputs = $request->all();
            // save image
            if ($request->hasFile('image')) {
                if (!empty($slider->logo))
                    $imageService->deleteImage($slider->logo);

                $imageService->setExclusiveDirectory('images' . DIRECTORY_SEPARATOR . "content" . DIRECTORY_SEPARATOR . "sliders");
                $inputs['image'] = $imageService->save($inputs['image']);
            }

        $slider->update($inputs);
        return to_route('admin.market.sliders.index')->with('success', "اسلایدر مورد نظر با موفقیت بروز رسانی شد.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return back()->with('cute-success', 'اسلایدر حذف گردید.');
    }
}
