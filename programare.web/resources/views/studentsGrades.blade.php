@extends('layouts.nav')

@section('content')
<div class="container">
    <div class="well row">
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Classes</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('/class/create') }}" method="post">
                        {!! csrf_field() !!}
                        <fieldset>
                            <legend>Add new class</legend>
                            @if ($errors->has('class_name'))
                                <strong>{{ $errors->first('class_name') }}</strong>
                            @endif
                            <div class="form-group">
                                <div class="col-lg-10">
                                    <input class="form-control" name="class_name" id="nameClaass" placeholder="class name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form><br><br><br>
                    <div class="classes">
                        <legend>Classes</legend>
                        <p> List of classes</p>
                        @foreach ($classes as $class)
                            <li>{{ $class->name }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Students</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('/student/create') }}" method="post">
                        {!! csrf_field() !!}
                        <fieldset>
                            <legend>Add new student</legend>
                            @if ($errors->has('student_name'))
                                <strong>{{ $errors->first('student_name') }}</strong>
                            @endif
                            <div class="form-group">
                                <select class="" name="class_id">
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                    @endforeach
                                </select>
                                <div class="col-lg-10">
                                    <input class="form-control" name="student_name" id="nameStudent" placeholder="student name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form><br><br><br>
                    <div class="classes">
                        <legend>Students</legend>
                        <p> List of students</p>
                        @foreach ($students as $student)
                            <li>{{ $student->name }} - {{ $student->class->name }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Grades</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('/grade/create') }}" method="post">
                        {!! csrf_field() !!}
                        <fieldset>
                            <legend>Add grade</legend>
                            @if ($errors->has('grade'))
                                <strong>{{ $errors->first('grade') }}</strong>
                            @endif
                            <div class="form-group">
                                <div class="col-lg-10">
                                    <select class="" name="student_id">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                    <input class="form-control" name="grade" id="grade" placeholder="grade" type="text">
                                </div>
                            </div>
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form><br><br><br>
                    <div class="classes">
                        <legend>Grades</legend>
                        <p> Final Grade </p>
                        @foreach ($grades as $grade)
                            <li>{{ $grade->student->name }} - {{ $grade->grade }}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
