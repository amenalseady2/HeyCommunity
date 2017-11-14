@extends('admin.layouts.default')

@section('mainBody')
<div id="section-mainbody" class="page-topic-node">
    <div class="">
        <div class="page-header-title">
            <h4 class="page-title">话题节点管理</h4>
        </div>
    </div>

    <div class="page-content-wrapper">
        <div class="container">
            <div class="well">
                <div class="row">
                    @foreach ($rootNodes as $index => $rootNode)
                        <div id="section-node-item" class="col-sm-4">
                            <div class="list-group">
                                <div class="list-group-item active">
                                    <span class="text-muted">#{{ $index + 1 }}</span> {{ $rootNode->name }}
                                    <div class="pull-right section-editbox disnone">
                                        <button onclick="nodeDestory('rootNode', 1)" disabled="" class="btn btn-danger btn-xs">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                        &nbsp;&nbsp;

                                        <a href="#" disabled="" class="btn btn-default btn-xs">
                                            <i class="glyphicon glyphicon-arrow-left"></i>
                                        </a>
                                        <a href="#" class="btn btn-default btn-xs">
                                            <i class="glyphicon glyphicon-arrow-right"></i>
                                        </a>
                                        <button onclick="nodeRenamePretreatment(1, '默认')" data-toggle="modal" data-target="#nodeRenameModal" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></button>
                                    </div>
                                </div>

                                @foreach ($rootNode->childNodes as $node)
                                    <div class="list-group-item">
                                        {{ $node->name }}
                                        <div class="pull-right section-editbox disnone">
                                            <button onclick="nodeDestory('node', 2)" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                                            &nbsp;&nbsp;

                                            <a href="#" disabled="" class="btn btn-default btn-xs">
                                                <i class="glyphicon glyphicon-arrow-up"></i>
                                            </a>
                                            <a href="#" disabled="" class="btn btn-default btn-xs">
                                                <i class="glyphicon glyphicon-arrow-down"></i>
                                            </a>
                                            <button onclick="nodeRenamePretreatment(2, '默认1')" data-toggle="modal" data-target="#nodeRenameModal" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i></button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@stop