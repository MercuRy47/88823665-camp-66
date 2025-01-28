{{-- @extends('errors::minimal') --}}
@extends('layouts.default_500')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
