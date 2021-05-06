@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box">

            <div class="box-header">
                <h3 class="box-title">All Doctors</h3>
                <span>Doctor information</span>

                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <th class="nosort">Avatar</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone number</th>
                            <th>department</th>
                            <th>edit</th>



                        </tr>

                        <tr>
                            @if(count($doctors)>0)
                            @foreach($doctors as $doctor)
                            <td>{{$doctor->name}}</td>
                            <td><img src="{{asset('images')}}/{{$doctor->image}}" width="100" alt=""></td>
                            <td>{{$doctor->email}}</td>
                            <td>{{$doctor->address}}<i class="ik ik-eye table-actions "></i> </td>
                            <td>{{$doctor->phone_number}}</td>
                            <td>{{$doctor->department}}</td>
                            <td>
                                <div class="table-actions">
                                    <a href="#"><i class="fas fa-eye" data-toggle="modal" data-target="#exampleModal{{$doctor->id}}"></i></a>
                                    <a href="{{route('doctor.edit',[$doctor->id])}}"><i class="far fa-edit"></i></a>
                                    <a href="{{route('doctor.show',[$doctor->id])}}"><i class="far fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                        @include('admin.doctor.modal')
                        @endforeach

                        @else
                        <td>No doctors to display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection