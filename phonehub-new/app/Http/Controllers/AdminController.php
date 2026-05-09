<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Store;
use App\Models\StorePrice;
use App\Models\BlogPost;

class AdminController
{
    private function checkAdmin()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'You are not admin. Cannot come here.');
        }
    }

    public function dashboard()
    {
        $this->checkAdmin();
        return view('admin.dashboard');
    }

    // Phones CRUD
    public function phones()
    {
        $this->checkAdmin();
        $phones = Phone::all();
        return view('admin.phones', compact('phones'));
    }

    public function addPhone(Request $request)
    {
        $this->checkAdmin();
        Phone::create($request->all());
        return back()->with('success', 'Phone add success!');
    }

    public function editPhone($id)
    {
        $this->checkAdmin();
        $phone = Phone::findOrFail($id);
        return view('admin.phone_edit', compact('phone'));
    }

    public function updatePhone(Request $request, $id)
    {
        $this->checkAdmin();
        $phone = Phone::findOrFail($id);
        $phone->update($request->all());
        return redirect('/admin/phones')->with('success', 'Phone update success!');
    }

    public function deletePhone($id)
    {
        $this->checkAdmin();
        Phone::findOrFail($id)->delete();
        return back()->with('success', 'Phone delete success!');
    }

    // Stores CRUD
    public function stores()
    {
        $this->checkAdmin();
        $stores = Store::all();
        return view('admin.stores', compact('stores'));
    }

    public function addStore(Request $request)
    {
        $this->checkAdmin();
        Store::create($request->all());
        return back()->with('success', 'Store add success!');
    }

    public function editStore($id)
    {
        $this->checkAdmin();
        $store = Store::findOrFail($id);
        return view('admin.store_edit', compact('store'));
    }

    public function updateStore(Request $request, $id)
    {
        $this->checkAdmin();
        $store = Store::findOrFail($id);
        $store->update($request->all());
        return redirect('/admin/stores')->with('success', 'Store update success!');
    }

    public function deleteStore($id)
    {
        $this->checkAdmin();
        Store::findOrFail($id)->delete();
        return back()->with('success', 'Store delete success!');
    }

    // Store Prices CRUD
    public function prices()
    {
        $this->checkAdmin();
        $prices = StorePrice::with(['phone', 'store'])->get();
        $phones = Phone::all();
        $stores = Store::all();
        return view('admin.prices', compact('prices', 'phones', 'stores'));
    }

    public function addPrice(Request $request)
    {
        $this->checkAdmin();
        StorePrice::create($request->all());
        return back()->with('success', 'Price add success!');
    }

    public function deletePrice($id)
    {
        $this->checkAdmin();
        StorePrice::findOrFail($id)->delete();
        return back()->with('success', 'Price delete success!');
    }

    // Blog CRUD
    public function blogs()
    {
        $this->checkAdmin();
        $blogs = BlogPost::all();
        return view('admin.blogs', compact('blogs'));
    }

    public function addBlog(Request $request)
    {
        $this->checkAdmin();
        BlogPost::create($request->all());
        return back()->with('success', 'Blog add success!');
    }

    public function editBlog($id)
    {
        $this->checkAdmin();
        $blog = BlogPost::findOrFail($id);
        return view('admin.blog_edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $this->checkAdmin();
        $blog = BlogPost::findOrFail($id);
        $blog->update($request->all());
        return redirect('/admin/blogs')->with('success', 'Blog update success!');
    }

    public function deleteBlog($id)
    {
        $this->checkAdmin();
        BlogPost::findOrFail($id)->delete();
        return back()->with('success', 'Blog delete success!');
    }
}