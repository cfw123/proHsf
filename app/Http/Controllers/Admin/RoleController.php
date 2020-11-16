<?php

namespace App\Http\Controllers\Admin;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Role::paginate(5);
        return view('admin.role.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        // 获取自己的权限
        $mauths = $role->auths->toArray();
        $mauths = count($mauths) > 0 ? array_column($mauths, 'id') : [];

        // 显示所有的权限
        // 取顶级
        $auth = Permission::where('pid', 0)->get()->toArray();
        foreach ($auth as $key => $value) {
            $auth[$key]['sub'] = Permission::where('pid', $value['id'])->get()->toArray();
        }

        return view('admin.role.show',compact('mauths','auth','role'));
    }

    // 给角色分配权限
    public function addauth(Request $request,Role $role) {
        $ids = $request->get('ids');

        $role->auths()->sync($ids);
        return redirect(route('admin.role.index'))->with('msg','分配成功');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
