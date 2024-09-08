<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Manufacturer;
use App\Models\Patteren;
use App\Models\Product;
use App\Models\Size;
use Doctrine\Inflector\Rules\Pattern;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    //
    function adminAuth(Request $req)
    {
        $user = Auth::attempt(["email" => $req->email, "password" => $req->password]);

        if ($user) {
            $role =  Auth::user()->role;

            if ($role == 1) {
                return redirect()->route("admin.dashboard");
            } else {
                Auth::logout();
                return redirect()->route("admin.login")->with("error", "Unauthorized access!");
            }
        } else {
            return redirect()->route("admin.login")->with("error", "Email or Password is Incorrect!");
        }
    }


    // SHOW ADMIN DASHBOARD
    function index()
    {
        return view("admin.dashboard");
    }

    // SHOW ADMIN PRODUCT PAGE
    function products()
    {
        $products = Product::with("manufacturer", "patteren")->get();

        return view("admin.products", ["products" => $products]);
    }

    // SHOW ADMIN ADD PRODUCT FORM PAGE
    function addProduct()
    {
        $patterens = Patteren::orderBy("manufacturer_id")->with("manufacturer")->get();
        $manufacturers = Manufacturer::all();

        $sizes = Size::all();

        return view("admin.add-product", [
            "manufacturers" => $manufacturers,
            "patterens" => $patterens,
            "sizes" => $sizes
        ]);
    }

    // SAVE PRODUCT TO DATABSE
    function saveProduct(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            "image" => "required|image",
            "manufacturer_id" => "required",
            "patteren_id" => "required",
            "fuel_efficiency" => "required",
            "wet_grip" => "required",
            "road_noise" => "required",
            "width" => "required",
            "profile" => "required",
            "rim_size" => "required",
            "speed" => "required",
            "tyre_type" => "required",
            "season_type" => "required",
            "budget_tyre" => "required",
            "price" => "required",

        ]);

        if ($validator->passes()) {

            $image = $req->image;
            $ext =  $image->getClientOriginalExtension();
            $imageName = time() . "." . $ext;

            $product = new Product();
            $product->name = $req->name;
            $product->image = $imageName;
            $product->manufacturer_id = $req->manufacturer_id;
            $product->patteren_id = $req->patteren_id;
            $product->fuel_efficiency = $req->fuel_efficiency;
            $product->wet_grip = $req->wet_grip;
            $product->road_noise = $req->road_noise;
            $product->width = $req->width;
            $product->profile = $req->profile;
            $product->rim_size = $req->rim_size;
            $product->speed = $req->speed;
            $product->tyre_type = $req->tyre_type;
            $product->season_type = $req->season_type;
            $product->budget_tyre = $req->budget_tyre;
            $product->price = $req->price;

            $save = $product->save();
            if ($save) {
                $image->move(public_path("uploads/products/"), $imageName);
                return redirect()->route("admin.products")->with("success", "New Product Added Successfully!");
            }
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }


    // SHOW ADMIN EDIT PRODUCT PAGE
    function editProduct($id)
    {
        $product = Product::where("id", $id)->with("manufacturer", "patteren")->first();
        // return $product;
        $manufacturers = Manufacturer::all();
        $patterens = Patteren::all();
        $sizes = Size::all();


        return view("admin.edit-product", [
            "product" => $product,
            "manufacturers" => $manufacturers,
            "patterens" => $patterens,
            "sizes" => $sizes
        ]);
    }

    // UPDATE PRODUCT
    function updateProduct($id, Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            "image" => "image",
            "manufacturer_id" => "required",
            "patteren_id" => "required",
            "fuel_efficiency" => "required",
            "wet_grip" => "required",
            "road_noise" => "required",
            "width" => "required",
            "profile" => "required",
            "rim_size" => "required",
            "speed" => "required",
            "tyre_type" => "required",
            "season_type" => "required",
            "budget_tyre" => "required",
            "price" => "required",

        ]);

        if ($validator->passes()) {

            $imageName = "";
            if ($req->image != null) {

                $oldProduct = Product::where("id", $id)->first();
                File::delete(public_path("uploads/products/"). $oldProduct->image);
                $image = $req->image;
                $ext =  $image->getClientOriginalExtension();
                $imageName = time() . "." . $ext;
            }

            $product = Product::findOrFail($id);
            $product->name = $req->name;
            if ($req->image != null) {
                $product->image = $imageName;
            }
            $product->manufacturer_id = $req->manufacturer_id;
            $product->patteren_id = $req->patteren_id;
            $product->fuel_efficiency = $req->fuel_efficiency;
            $product->wet_grip = $req->wet_grip;
            $product->road_noise = $req->road_noise;
            $product->width = $req->width;
            $product->profile = $req->profile;
            $product->rim_size = $req->rim_size;
            $product->speed = $req->speed;
            $product->tyre_type = $req->tyre_type;
            $product->season_type = $req->season_type;
            $product->budget_tyre = $req->budget_tyre;
            $product->price = $req->price;

            $save = $product->save();

            if ($req->image != null) {
                $image->move(public_path("uploads/products/"), $imageName);
            }
            return redirect()->route("admin.products")->with("success", " Product Updated Successfully!");
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }

    // DELETE PRODUCT
    function deleteProduct(Request $req){
        $product = Product::findOrFail($req->id);

        $deleteProuduct = Product::where("id", $req->id)->delete();

        if($deleteProuduct){
            File::delete(public_path("uploads/products/"). $product->image);
            session()->flash("success", "Product deleted!");
            return response()->json([
                "status"=>true
            ]);
            
        }


        

    }
    

    // SHOW ADMIN MANUFACTURERS PAGE
    function manufacturers()
    {
        $manufacturers = Manufacturer::all();
        return view("admin.manufacturers", ["manufacturers" => $manufacturers]);
    }

    // SHOW ADD MANUFACTURERS FORM
    function addManufacturers()
    {
        return view("admin.add-manufacture");
    }
    // SAVE MANUFACTURERS FORM DATA
    function saveManufacturers(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            // "image"=> "image",
        ]);

        if ($validator->passes()) {

            $imageName = "";
            if ($req->image != null) {
                $image = $req->image;
                $ext =  $image->getClientOriginalExtension();
                $imageName = time() . "." . $ext;
                $image->move(public_path("/uploads/brands/"), $imageName);
            }


            $manufacturer = new Manufacturer();
            $manufacturer->name = $req->name;
            $manufacturer->excerpt = $req->excerpt;
            $manufacturer->description = $req->description;
            $manufacturer->image = $imageName;
            $manufacturer->save();
            return redirect()->route("admin.manufacturers")->with("success", "Manufacturer Added Successfully!");
        } else {
            return redirect()->route("admin.addManufacturers")->withErrors($validator);
        }
    }

    // SHOW EDIT MANUFACTURERS FORM
    function editManufacturers($id)
    {
        $manufacturer = Manufacturer::where("id", $id)->get()->first();

        if ($manufacturer) {
            return view("admin.edit-manufacture", ["manufacturer" => $manufacturer]);
        } else {
            return redirect()->route("admin.manufacturers")->with("error", "Manufacturer not found!");
        }
    }
    // SHOW EDIT MANUFACTURERS FORM
    function updateManufacturers(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required"
        ]);

        if ($validator->passes()) {

            $manufacturer = Manufacturer::where("id", $req->id)->get()->first();
            if (!$manufacturer) {
                return redirect()->back()->with("Something Goes Wrong, please try again.");
            }

            if ($req->image == "") {
                $manufacturer->name = $req->name;
                $manufacturer->excerpt = $req->excerpt;
                $manufacturer->description = $req->description;
                $manufacturer->save();
                return redirect()->route("admin.manufacturers")->with("succes", "Manufacturer Updated!");
            } else {
                $manufacturer = Manufacturer::where("id", $req->id)->get()->first();


                File::delete(public_path("uploads/brands/") . $manufacturer->image);

                $image = $req->image;
                $ext =  $image->getClientOriginalExtension();
                $imageName = time() . "." . $ext;
                $manufacturer->name = $req->name;
                $manufacturer->excerpt = $req->excerpt;
                $manufacturer->description = $req->description;
                $manufacturer->image = $imageName;
                $manufacturer->save();

                $image->move(public_path("uploads/brands/"), $imageName);
                return redirect()->route("admin.manufacturers")->with("succes", "Manufacturer Updated!");
            }
        } else {
            return redirect()->back()->withErrors($validator);
        }
    }

    function deleteManufacturers(Request $req)
    {
        $manufacturer = Manufacturer::where("id", $req->id)->get()->first();

        if (!$manufacturer) {
            session()->flash("error", "Manufacturer not found!");
            return response()->json([
                "status" => false
            ]);
        }

        File::delete(public_path("uploads/brands/") . $manufacturer->image);

        $deleteManu = Manufacturer::where("id", $req->id)->delete();

        if ($deleteManu) {
            session()->flash("success", "Manufacturer Deleted!");
            return response()->json([
                "status" => true
            ]);
        }
    }


    // SHOW ADMIN TYRE PATTEREN PAGE
    function tyrePatteren()
    {
        $patterens = Patteren::with("manufacturer")->get();
        return view("admin.tyre-patteren", ["patterens" => $patterens]);
    }


    // SHOW ADMIN ADD PATTEREN PAGE
    function addTyrePatteren()
    {
        $manufacturers = Manufacturer::all();
        return view("admin.add-patteren", ["manufacturers" => $manufacturers]);
    }

    // SHOW ADMIN Save PATTEREN PAGE
    function saveTyrePatteren(Request $req)
    {
        $validator = Validator::make($req->all(), [
            "name" => "required",
            "manufacturer_id" => "required"
        ]);

        if ($validator->passes()) {

            $patteren = new Patteren();
            $patteren->name = $req->name;
            $patteren->manufacturer_id = $req->manufacturer_id;
            $patteren->save();
            return redirect()->route("admin.tyrePatteren");
        } else {
            return redirect()->back()->withErrors($validator);
        }

        // return view("admin.tyre-patteren");
    }

    // SHOW ADMIN EDIT PATTEREN PAGE
    function editTyrePatteren($id)
    {

        $manufacturers = Manufacturer::all();
        $patteren = Patteren::find($id);


        return view("admin.edit-patteren", ['manufacturers' => $manufacturers, 'patteren' => $patteren]);
    }

    // DELETE PATTEREN
    function deleteTyrePatteren(Request $req)
    {
        $patteren = Patteren::findOrFail($req->id);

        if ($patteren) {
            $patteren = Patteren::where("id", $req->id)->delete();
            session()->flash("success", "Patteren Deleted!");
            return response()->json([
                "status" => true
            ]);
        }
    }




    // SHOW ADMIN ALL USERS PAGE
    function users()
    {
        return view("admin.users");
    }

    // SHOW ADMIN ADD USERS PAGE
    function addUser()
    {
        return view("admin.add-user");
    }

    // SHOW ADMIN edit USERS PAGE
    function editUser()
    {
        return view("admin.edit-user");
    }



   
}
