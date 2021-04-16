{{-- @extends('errors::minimal') --}}
{{-- @extends('errors::layout') --}}
@extends('errors::illustrated-layout')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
