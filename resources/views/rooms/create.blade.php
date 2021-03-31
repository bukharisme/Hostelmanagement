@extends('layouts.app', ['activePage' => 'rooms', 'titlePage' => __('Create Room')])

@section('content')
  <div class="content">

      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('room.store') }}" class="form-horizontal">
            @csrf


            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('เพิ่มห้อง') }}</h4>
                <p class="card-category">{{ __('รายการ') }}</p>
              </div>
              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('เลขห้อง') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" input type="text" name="number" id="number" placeholder="{{ __('เลขห้อง') }}" value="" required />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('ชั้น') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                        <select name="floor" id="floor" class="form-control" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                  </div>
                </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('จำนวนผู้เข้าใช้') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <select name="capacity" id="capacity" class="form-control" required>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                </div>
                  <div class="row">
                      <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('สถานะ') }}</label>
                      <div class="col-sm-7">
                          <div class="form-group">
                              <form class="form-control" required>
                                  <input type="radio" id="ready" name="status" value="พร้อมใช้งาน" required>
                                  <label for="ready">พร้อมใช้งาน</label><br>
                                  <input type="radio" id="stop" name="status" value="ไม่พร้อมใช้งาน" required>
                                  <label for="stop">ไม่พร้อมใช้งาน</label><br>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('บันทึก') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
