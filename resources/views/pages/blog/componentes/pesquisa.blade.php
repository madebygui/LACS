<div class="col-md-5 col-lg-5 col-sm-12">
<form method="POST" action="{{route('search.post')}}" class="mbr-form form-with-styler m-4 d-flex justify-content-end">
  @csrf
          <div class="dragArea row d-flex justify-content-end">
            <div class="col-8 col-md-10 col-lg-10" style="padding:0 !important;">
              <input class="input-sm input-inverse special-form display-4 form-search mr-2" style="width:100% !important;" name="search_term" placeholder="Faça a sua pesquisa" type="text" required>
            </div>
            <div class="col-4 col-md-2 col-lg-2 d-flex justify-content-center" style="padding:0 !important;">
              <button class="btn-sm btn-black" type="submit" style="border-radius: 15px!important;border: 0.8px!important;padding: 0.6rem 1.1rem!important;"><span class="fa fa-search mbr-iconfont mbr-iconfont-btn"></span></button>
            </div>
          </div>
          
        </form>
        </div>