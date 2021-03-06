<?php
/**
 * File Name: show.blade.php
 * Description:管理员详情展示页
 * Created by PhpStorm.
 * Group: FiresGroup
 * Auth: Wim
 * Date: 2017/6/20
 * Time: 16:32
 */
?>
{{--{{dd(111)}}--}}
@extends('layouts.iframe')

@section('title','管理员详情页')

@section('css')
    @parent
@endsection

@section('content')
    {{--{{dump($array)}}--}}
    <div>
        <div style="text-align:center;margin-left: 300px">

            <table class="layui-table " lay-skin="row" style="width:80%;" lay-even>
                <tr>
                    <th colspan="4" style="font: 25px/1.5 楷体">管理员个人信息</th>
                </tr>
                <tr>
                    <td style="width:25%">管理员id号</td>
                    <td style="width:25%">
                        <div style="color:#01AAED">{{$data->id}}</div>
                    </td>

                    <td style="width:25%">所属组组名</td>
                    <td style="width:25%">
                        <div style="color:#01AAED">{{$str->group_name}}</div>
                    </td>
                </tr>
                <tr>
                    <td>管理员名</td>
                    <td>
                        <div style="color:#01AAED">{{$data->username}}</div>
                    </td>

                    <td>密码</td>
                    <td>
                        <div style="color:#01AAED">{{$data->password}}</div>
                    </td>
                </tr>
                <tr>
                    <td>状态</td>
                    <td>
                        <div style="color:#01AAED">{{$status[$data->status]}}</div>
                    </td>

                    <td>最后登录ip地址</td>
                    <td>
                        <div style="color:#01AAED">{{$data->last_ip}}</div>
                    </td>
                </tr>
                <tr>
                    <td>创建时间</td>
                    <td>
                        <div style="color:#01AAED">{{$data->add_time}}</div>
                    </td>

                    <td>最后登录时间</td>
                    <td>
                        <div style="color:#01AAED">{{$data->last_time}}</div>
                    </td>
                </tr>
            </table>

            <table class="layui-table " lay-skin="row" style="width:80%;" lay-even>
                <tr>
                    <th colspan="4" style="font: 25px/1.5 楷体">管理员所属组信息</th>
                </tr>
                <tr>
                    <td style="width:25%">管理员所属组id号</td>
                    <td style="width:25%">
                        <div style="color:#01AAED">{{$str->id}}</div>
                    </td>

                    <td style="width:25%">管理员所属组组名</td>
                    <td style="width:25%">
                        <div style="color:#01AAED">{{$str->group_name}}</div>
                    </td>
                </tr>
                <tr>
                    <td style="width:25%">所拥有权限名称</td>
                    <td style="width:25%">
                        <div style="color:#01AAED">
                            {{ $st='' }}
                            @foreach($array as $v)
                                <?php $st .= $v->role_name . ','; ?>
                            @endforeach
                            {{rtrim($st, ',')}}
                        </div>
                    </td>

                    <td style="width:25%">管理员所属组状态</td>
                    <td style="width:25%">
                        <div style="color:#01AAED">{{$status[$str->status]}}</div>
                    </td>
                </tr>
                <tr>
                    <td style="width:25%">管理员所属组描述</td>
                    <td colspan="3" style="color:#01AAED">{{$str->group_desc}}</td>
                </tr>
            </table>

            <table class="layui-table " lay-skin="row" style="width:80%;" lay-even>
                <tr>
                    <th colspan="4" style="font: 25px/1.5 楷体">管理员权限详细信息</th>
                </tr>
                {{$st = ''}}

                <tr>
                    <td style="width:25%">所拥有权限id号</td>
                    <td style="width:25%">所拥有权限名称</td>
                    <td style="width:25%">所拥有权限方法</td>
                    <td style="width:25%">所拥有权限状态</td>
                </tr>
                @foreach($array as $v)
                    <tr>
                        <td>
                            <div style="color:#01AAED">
                                {{$v->id}}
                            </div>
                        </td>
                        <td>
                            <div style="color:#01AAED">
                                {{$v->role_name}}
                            </div>
                        </td>
                        <td>
                            <div style="color:#01AAED">
                                {{$v->role}}
                            </div>
                        </td>
                        <td>
                            <div style="color:#01AAED">
                                {{$status[$v->status]}}
                            </div>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td style="width:25%" colspan="4">所拥有权限描述</td>
                </tr>

                @foreach($array as $v)
                    <tr>
                        <td colspan="4">
                            <div style="color:#01AAED">
                                {{$v->role_name.'  :  '.$v->role_desc}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection


