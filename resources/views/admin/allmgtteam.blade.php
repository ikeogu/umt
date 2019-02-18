@extends('layouts.admindashboard')
@section('dash')

<!-- Dark table -->
<div class="row mt-5">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">List of Management Team </h3>
              <h3 class="text-white mb-0">They are {{App\MgtTeam::count()}} in Number  </h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Position</th>
                    <th scope="col">Pic</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                @foreach($mgt as $bo)
                <tbody>
                  <tr>
                    
                    <td>
                        <div class="d-flex align-items-center">
                            <h5>{{$bo->id}}</h5>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <h5>{{$bo->name}}</h5>
                        </div>
                        </td>
                    <td>
                      <div class="d-flex align-items-center">
                        <h5>{{$bo->department}}</h5>
                      </div>
                    </td>
                   
                  
                  
                    <td>
                      <div class="d-flex align-items-center">
                        <h5>{{$bo->position}}</h5>
                      </div>
                    </td>
                    <td class="text-right">
                        <div class="media align-items-center">
                            <a href="#" class="avatar rounded-circle mr-3">
                            <img alt="Image placeholder" src="storage/mgt/{{$bo->passport}}">
                            </a>
                        </div>
                    </td>
                                  
                  </tr>
                 
                </tbody>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection