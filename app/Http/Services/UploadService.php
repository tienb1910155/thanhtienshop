<?php


namespace App\Http\Services;


class UploadService
{
    public function store($request)
    {
        if ($request->hasFile('file')) {
            try {
                // $name = $request->file('file')->getClientOriginalName();
                $name =  $request->input('name') .'i.'. $request->file('file')->extension()  ;
                $pathFull = 'uploads/products';

                $request->file('file')->storeAs(
                    'public/' . $pathFull, $name
                );

                return '/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }
}
