@extends('layouts.app', ['activePage' => 'rooms', 'titlePage' => __('rooms')])
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">จำนวนห้องทั้งหมด</p>
              <h3 class="card-title">378
                <small>ห้อง</small>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                  อัพเดตล่าสุด
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">A</i>
              </div>
              <p class="card-category">จำนวนห้อง ตึก A</p>
              <h3 class="card-title">127</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                  อัพเดตล่าสุด
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="material-icons">B</i>
              </div>
              <p class="card-category">จำนวนห้อง ตึก B</p>
              <h3 class="card-title">127</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                  อัพเดตล่าสุด
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                  <i class="material-icons">C</i>
              </div>
              <p class="card-category">จำนวนห้อง ตึก C</p>
              <h3 class="card-title">127</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                  อัพเดตล่าสุด
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-warning">
                    <h4 class="card-title">รายงานห้อง</h4>
                    <p class="card-category">รายงานห้องทั้งหมด</p>
                </div>
                <div class="card-body table-responsive">
                    <div class="d-flex justify-content-end mb-1" >
                        <a href="{{route('room.create')}}" class="btn btn-success"> เพิ่มห้อง</a>
                    </div>
                    <input id="myInput" type="text" placeholder="Search.." class="form-control">
                    @if($room->count()>0)
                    <table class="table table-hover">
                        <thead class="text-warning">
                        <th>เลขห้อง</th>
                        <th>ชั้น</th>
                        <th>จำนวน</th>
                        <th>สถานะ</th>
                        </thead>
                        <tbody id="myTable">
                        @foreach($room as $room)
                        <tr>
                            <td>{{$room->number}}</td>
                            <td>{{$room->floor}}</td>
                            <td>{{$room->capacity}}</td>
                            <td>{{$room->status}}</td>
                            <td>
                                <a href="{{route('room.edit',$rooms->id)}}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                            <td>
                                <form class="delete_form" action="{{route('room.destroy',$rooms->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" name="" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 class="text text-center">No Data</h3>
                    @endif
                </div>
            </div>
        </div>

          </div>
        </div>

@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
          $('.delete_form').on('submit',function(){
              if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
                  return true;
              }else{
                  return false;
              }

          });
      });
  </script>
@endpush
