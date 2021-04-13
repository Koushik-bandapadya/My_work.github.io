@extends('template')
@section('content')
<div style="background-image: url('t.jpg')" >

<link rel="stylesheet" href="{{asset('css/search.css')}}">
<div class="s007">
      <form>
        <div class="inner-form">
          <div class="basic-search">
            <div class="input-field">
              <div class="icon-wrap">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                  <path d="M18.869 19.162l-5.943-6.484c1.339-1.401 2.075-3.233 2.075-5.178 0-2.003-0.78-3.887-2.197-5.303s-3.3-2.197-5.303-2.197-3.887 0.78-5.303 2.197-2.197 3.3-2.197 5.303 0.78 3.887 2.197 5.303 3.3 2.197 5.303 2.197c1.726 0 3.362-0.579 4.688-1.645l5.943 6.483c0.099 0.108 0.233 0.162 0.369 0.162 0.121 0 0.242-0.043 0.338-0.131 0.204-0.187 0.217-0.503 0.031-0.706zM1 7.5c0-3.584 2.916-6.5 6.5-6.5s6.5 2.916 6.5 6.5-2.916 6.5-6.5 6.5-6.5-2.916-6.5-6.5z"></path>
                </svg>
              </div>
             <input id="search" type="text" placeholder="বাসা ভাড়া চাই" />
              <div class="result-count">
                <span>108 </span>results</div>
            </div>
          </div>
          <div class="advance-search">
            <span class="desc">Advanced Search</span>
            <div class="row">
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="" value="">DHAKA</option>
                    <option>MIRPUR</option>
                    <option>BASHABO</option>
                    <option>MIRPUR</option>
                    <option>GENDERIA</option>
                    
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="" value="">SIZE</option>
                    <option>500 -700 SQFT</option>
                    <option>700 -1300 SQFT</option>
                    <option>1300 -2500 SQFT</option>
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="" value="">BED</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row second">
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="" value="">BATH</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </div>
              </div>
              <div class="input-field">
                <div class="input-select">
                  <select data-trigger="" name="choices-single-defaul">
                    <option placeholder="" value="">PRICE</option>
                    <option>5000-10000 BDT</option>
                    <option>10000-15000 BDT</option>
                    <option>15000-20000 BDT</option>
                    <option>20000-25000 BDT</option>
                    <option>25000-30000 BDT</option>
                    <option>30000-40000 BDT</option>
                  </select>
                </div>
              </div>
            
            <div class="row third">
              <div class="input-field">
                <button class="btn-search">Search</button>
                <button class="btn-delete" id="delete">Delete</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        removeItemButton: true,
        itemSelectText: '',
      });
      for (let i = 0; i < customSelects.length; i++)
      {
        customSelects[i].addEventListener('addItem', function(event)
        {
          if (event.detail.value)
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('valid')
            parent.classList.remove('invalid')
          }
          else
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('invalid')
            parent.classList.remove('valid')
          }
        }, false);
      }
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>

      
@endsection