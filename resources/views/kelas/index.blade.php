@extends('templates.default')
@section('content')
<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Nama Kelas</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kelass as $kelas)
                          <tr>
                            <td>{{$kelas->id}}</td>
                            <td>{{$kelas->Nama_Kelas}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection