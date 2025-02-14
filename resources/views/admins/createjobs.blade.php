@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Create Jobs</h5>

          <form class="p-4 p-md-5" action="{{ route('store.jobs') }}" method="post" enctype="multipart/form-data">

            <!--job details-->
            @csrf

            <div class="form-group">
              <label for="job-title">Job Title</label>
              <input type="text" name="job_title" class="form-control" id="job-title" placeholder="Product Designer">
            </div>


            <div class="form-group">
              <label for="job-region">Job Region</label>
              <select name="job_region" class="form-select form-control" id="job-region" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region">
                    <option value="Anywhere">Anywhere</option>
                    <option value="San Francisco">San Francisco</option>
                    <option value="Pablo Alto">Palo Alto</option>
                    <option value="New York">New York</option>
                    <option value="Manhattan">Manhattan</option>
                    <option value="Ontario">Ontario</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Mountain View">Mountain View</option>
                  </select>
            </div>
            <div class="form-group">
                <label for="job-title">Company</label>
                <input type="text" name="company" class="form-control" id="job-title" placeholder="company">
            </div>

            <div class="form-group">
              <label for="job-type">Job Type</label>
              <select name="job_type" class="selectpicker border rounded form-control" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                <option value="Part Time">Part Time</option>
                <option value="Full Time">Full Time</option>
              </select>
            </div>
            <div class="form-group">
              <label for="job-location">Vacancy</label>
              <input name="vacancy" type="text" class="form-control" id="job-location" placeholder="e.g. 3">
            </div>
            <div class="form-group">
              <label for="job-type">Experience</label>
              <select name="experience" class="selectpicker border rounded form-control" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Years of Experience">
                <option value="1-3 years">1-3 years</option>
                <option value="3-6 years">3-6 years</option>
                <option value="6-9 years">6-9 years</option>
              </select>
            </div>
            <div class="form-group">
              <label for="job-type">Salary</label>
              <select name="salary" class="selectpicker border rounded form-control" id="job-type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Salary">
                <option value="$50-$70k">$50k - $70k</option>
                <option value="$70-$100k">$70k - $100k</option>
                <option value="$100-$130k">$100k - $150k</option>
              </select>
            </div>

            <div class="form-group">
              <label for="job-type">Gender</label>
              <select name="gender" class="selectpicker border rounded form-control " id="" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Any">Any</option>
              </select>
            </div>

            <div class="form-group">
              <label for="job-location">Application Deadline</label>
              <input name="application_deadline" type="text" class="form-control" id="" placeholder="e.g. 20-12-2022">
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Job Description</label>
                <textarea name="job_description" id="" cols="30" rows="7" class="form-control" placeholder="Write Job Description..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Responsibilities</label>
                <textarea name="responsibilities" id="" cols="30" rows="7" class="form-control" placeholder="Write Responsibilities..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Education & Experience</label>
                <textarea name="education_experience" id="" cols="30" rows="7" class="form-control" placeholder="Write Education & Experience..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="">Other Benefits</label>
                <textarea name="other_benefits" id="" cols="30" rows="7" class="form-control" placeholder="Write Other Benifits..."></textarea>
              </div>
            </div>

            <!--company details-->


            <div class="form-group">
                <label for="job-type">Categroy</label>
                <select name="category" class="selectpicker border rounded form-control " id="" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Gender">
                  @foreach ($categories as $category)

                    <option value="{{ $category->name }}">{{ $category->name }}</option>

                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="job-location">Images</label>
                <input name="image" type="file" class="form-control">
            </div>

            <div class="col-lg-4 ml-auto">
                <div class="row">
                  <div class="col-6">
                    <input type="submit" name="submit" class="btn btn-block btn-primary btn-md" style="margin-left: 200px;" value="Save Job">
                  </div>
                </div>
            </div>


          </form>
        </div>
      </div>
    </div>
  </div>



</div>
@endsection
