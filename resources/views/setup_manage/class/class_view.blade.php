@extends('welcome')
@section('admin_content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
           <div class="card" style="border-radius:0%;margin-top:35px;box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);">
               <div class="mt-2 mb-2">
                   <span id="title" class="mt-2 ml-3 mr-3" style="font-family: 'Tinos', serif;font-size:25px;position: relative;top: 10px;">Student Class Info List </span>
                   <span>
                    <a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"  rel="noopener noreferrer" class="btn btn-primary mt-3 ml-3 mr-3" style="border-radius: 0%;float:right;font-family: 'Tinos', serif;box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);">
                        Add New Class
                    </a>
                   </span>
                   @if(session()->has('message'))
                    <div class="alert alert-success ">
                        {{ session()->get('message') }}
                    </div>
                  @endif
               </div>
               <div  class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <span id="modal_title">Add New Class Here ! </span>  
                  <div class="modal-content" style="border-radius:0%">
                      <div class="container">
                        <div class="form-group">
                            <form action="{{route('class.add')}}" method="POST"> 
                                @csrf
                                <label for="class_name" class="mt-2">Class Name : </label>
                                <input type="text" name="class_name" id="class_name" placeholder="Inter ClassName..... " class="form-control" style="border-radius:0px;width:100%">
                                 @if($errors->has('class_name'))
                                    @foreach($errors->get('class_name') as $error)
                                        <small class="text-danger">{{$error}}</small>
                                    @endforeach
                                 @endif
                                 <br/>
                                <label for="status" class="mt-2">Status : </label><br/>
                                <input type="radio" name="status" value="active"> Active &nbsp;&nbsp;
                                <input type="radio" name="status" value="inactive" > Inactive <br/>
                                @if($errors->has('status'))
                                    @foreach($errors->get('status') as $error)
                                        <small class="text-danger">{{$error}}</small>
                                    @endforeach
                                 @endif
                                <br/>
                                <input type="submit" value="Add Now" class="btn btn-outline-dark">
                            </form>
                        </div>
                      </div>
                  </div>
                </div>
              </div>


               <div class="card-body">
                <table class="table table-bordered" id="datatable" style="box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Sl No </th>
                        <th scope="col">Class Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
            @foreach($all_class as $key => $class)            
                      <tr>
                        <th scope="row">{{$key + 1 }}</th>
                        <td>{{$class->class_name}}</td>
                        <td> {{$class->status}} </td>
                        <td style="margin:auto">
                            <a href="" class="btn btn-primary">
                                <i class="fa fa-thumbs-o-up"></i>
                            </a>
                            <a href="" class="btn btn-info">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                      </tr>
                @endforeach      
                    </tbody>
                  </table>
               </div>
           </div>
              
              

        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

    

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    2016 - 2020 &copy;  MD Sofikul islam  <a href="#"> sobhan</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>
<script>
    @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
          case 'info':
               toastr.info("{{ Session::get('messege') }}");
               break;
          case 'success':
              toastr.success("{{ Session::get('messege') }}");
              break;
          case 'warning':
             toastr.warning("{{ Session::get('messege') }}");
              break;
          case 'error':
              toastr.error("{{ Session::get('messege') }}");
              break;
      }
    @endif
 </script> 
@endsection