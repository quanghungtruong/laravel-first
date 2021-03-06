<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\FormRequest;
class TinTucController extends BaseController
{
    public function getGiaiTri(){
        return view('site.GiaiTri');
    }
    public function getProduct(){
        $data=Product::find(1)->reCategory()->get()->toArray();
        return view('site.SanPham',compact('data'));
    }
    public function getCategory(){
        $cat=Category::find(5)->reProduct()->get()->toArray();
        return view('site.SanPham',compact('cat'));
    }
    public function addCategory(FormRequest $request ){
        $data=new Category();
        $data->cat_name=$request->cat_name;
        $data->save();
        return redirect('/form/add-category');
    }

}