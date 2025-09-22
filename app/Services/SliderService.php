<?php

namespace App\Services;

use App\Models\Slider;
use App\Models\Review;

class SliderService
{


    public function getAllSliders()
    {
        return Slider::orderBy('created_at', 'desc')->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function create_slider($request)
    {
        if ($request->hasFile('slider_image')) {
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('slider_image')->move(getcwd().'/public/uploads/sliders', $fileNameToStore);
            
        } else {
            
            $fileNameToStore = '';
        }
        
        $slider = new Slider([
            'slider_title' => $request->slider_title,
            'slider_image' => $fileNameToStore,
            'slider_description' => $request->slider_description,
            'status' => $request->status
        ]);

        $slider->save();
        // $user->agent()->save($agent);
        return $slider;
    }

    public function getSlider($id)
    {
        $slider = Slider::findOrFail($id);
        return compact('slider');
    }

    public function getSliderEditData($id)
    {
        $slider = Slider::findOrFail($id);
        return compact('slider');
    }


    public function updateSlider($request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->slider_title = $request->slider_title;
        $slider->slider_description = $request->slider_description;
        $slider->status = $request->status;

        if ($request->hasFile('slider_image')) {
           
            if ($slider->slider_image) {
                $previousImagePath = getcwd().'/public/uploads/sliders/'.$slider->slider_image;
                if (file_exists($previousImagePath)) {
                    @unlink($previousImagePath);
                }
            }
            $fileNameWithExt = $request->file('slider_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slider_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('slider_image')->move(getcwd().'/public/uploads/sliders', $fileNameToStore);
            $slider->slider_image = $fileNameToStore;
               
        }
        $slider->save();
        return $slider;
    }

    public function searchSlider($request)
    {
        $searchTerm = trim($request->input('search'));
        $query = Slider::query();

        $query->where(function($q) use ($searchTerm) {
            $q->where('slider_title', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('slider_image', 'LIKE', '%' . $searchTerm . '%')
              ->orWhere('slider_description', 'LIKE', '%' . $searchTerm . '%');
        });

        return $query->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function deleteSlider($id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider->slider_image) {
            $imagePath = getcwd().'/public/uploads/sliders/'.$slider->slider_image;
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
        }

        if($slider->delete()) {
            return true;
        }
        return false;
    }


    # Review code below
    public function getAll_reviews()
    {
        return Review::orderBy('created_at', 'desc')->paginate(config('constants.ROW_PER_PAGE'));
    }

    public function create_review($request)
    {
        if ($request->hasFile('review_image')) {
            $fileNameWithExt = $request->file('review_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('review_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('review_image')->move(getcwd().'/public/uploads/reviews', $fileNameToStore);
            
        } else {
            
            $fileNameToStore = '';
        }
        
        $review = new Review([
            'review_title' => $request->review_title,
            'review_image' => $fileNameToStore,
            'status' => $request->status
        ]);

        $review->save();
        // $user->agent()->save($agent);
        return $review;
    }

    public function get_review($id)
    {
        $review = Review::findOrFail($id);
        return compact('review');
    }

    public function getReviewsEditData($id)
    {
        $review = Review::findOrFail($id);
        return compact('review');
    }


    public function update_review($request, $id)
    {
        $review = Review::findOrFail($id);
        $review->review_title = $request->review_title;
        $review->status = $request->status;

        if ($request->hasFile('review_image')) {
           
            if ($review->review_image) {
                $previousImagePath = getcwd().'/public/uploads/reviews/'.$review->review_image;
                if (file_exists($previousImagePath)) {
                    @unlink($previousImagePath);
                }
            }
            $fileNameWithExt = $request->file('review_image')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('review_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('review_image')->move(getcwd().'/public/uploads/reviews', $fileNameToStore);
            $review->review_image = $fileNameToStore;
               
        }
        $review->save();
        return $review;
    }

    public function delete_review($id)
    {
        $review = Review::findOrFail($id);
        if ($review->review_image) {
            $imagePath = getcwd().'/public/uploads/reviews/'.$review->review_image;
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
        }

        if($review->delete()) {
            return true;
        }
        return false;
    }

}
