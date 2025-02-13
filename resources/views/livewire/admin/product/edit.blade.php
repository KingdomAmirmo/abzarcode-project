@extends('livewire.admin.layout.master')


@section('head-tag')
    <title>ویرایش محصول</title>
    <style>

        .tags-input-wrapper{
            background: transparent;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 100%;
        }
        .tags-input-wrapper input{
            border: none;
            background: transparent;
            outline: none;
            width: 140px;
            margin-left: 8px;
        }
        .tags-input-wrapper .tag{
            display: inline-block;
            background-color: #fa0e7e;
            color: white;
            border-radius: 40px;
            padding: 0px 3px 0px 7px;
            margin-right: 5px;
            margin-bottom:5px;
            box-shadow: 0 5px 15px -2px rgba(250 , 14 , 126 , .7)
        }
        .tags-input-wrapper .tag a {
            margin: 0 7px 3px;
            display: inline-block;
            cursor: pointer;
        }
    </style>
@endsection

@section('content')

    <section class="w-100 p-8">
        <div>
            <form action="{{ route('admin.product.update', $product->id) }}" class="form-control" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="border-bottom border-1 border-shades-1 mb-4">
                    <h3 class="fs-4 text-center text-shades-1">ویرایش محصول</h3>
                </div>

                <div>
                    <div>عکس :</div>
                    <div class="input-group mb-2">
                        <input class="form-control rounded-2 border-1" type="file" name="image" value="" wire:model="image">
                        @error('image')
                        <span class="alert-red py-1" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <img src="{{ asset($product->image) }}" width="100" height="auto" alt="">
                    </div>
                </div>



                <div>نام :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" name="title" type="text" wire:model="title" value="{{ old('title', $product->title) }}" placeholder="نام محصول">
                    @error('title')
                            <span class="alert-red py-1" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>

                <div>آدرس :</div>
                <div class="input-group mb-2">
                    <input class="form-control rounded-2 border-1" name="url" type="text" wire:model="url" value="{{ old('url', $product->url) }}" placeholder="آدرس محصول">
                    @error('url')
                    <span class="alert-red py-1" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>

                <div>وضعیت :</div>
                <div class="input-group mb-2">
                    <select name="status" class="form-control form-control-sm rounded-2 border-1 p-3" id="status" wire:model="status">
                        <option value="0" @if(old('status', $product->status) == 0) selected @endif>غیرفعال</option>
                        <option value="1" @if(old('status', $product->status) == 1) selected @endif>فعال</option>
                    </select>
                    @error('status')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>


                <div>نوع توسعه :</div>
                <div class="input-group mb-2">
                    <select name="development_type" class="form-control form-control-sm rounded-2 border-1 p-3" id="development_type" wire:model="development_type">
                        <option value="0" @if(old('development_type', $product->development_type) == 0) selected @endif>بر پایه وردپرس</option>
                        <option value="1" @if(old('development_type', $product->development_type) == 1) selected @endif>کدنویسی اختصاصی</option>
                    </select>
                    @error('development_type')
                        <span class="alert-red text-red" role="alert">
                            <strong class="text-red">
                                {{ $message }}
                            </strong>
                        </span>
                    @enderror
                </div>

                <div>دسته :</div>
                <div class="input-group mb-2">
                    <select name="product_category_id" id="" class="form-control form-control-sm rounded-2 border-1 p-3">
                        @foreach($productCategories as $productCategory)
                            <option value="{{ $productCategory->id }}" @if(old('product_category_id', $product->product_category_id) == $productCategory->id) selected @endif>
                                {{ $productCategory->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('product_category_id')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>


                <div>توضیحات :</div>
                <div class="mb-6">
                    <textarea name="introduction" id="" cols="30" rows="10" class="form-control border-1" placeholder="توضیحات" wire:model="introduction">{{ old('introduction', $product->introduction) }}</textarea>
                    @error('introduction')
                    <span class="alert-red text-red" role="alert">
                                <strong class="text-red">
                                    {{ $message }}
                                </strong>
                            </span>
                    @enderror
                </div>

                <button type="submit" class="btn w-100 fs-6">
                    ثبت
                </button>
            </form>
        </div>
    </section>


@endsection


@section('script')
    <script>
        (function(){

            "use strict"


            // Plugin Constructor
            var TagsInput = function(opts){
                this.options = Object.assign(TagsInput.defaults , opts);
                this.init();
            }

            // Initialize the plugin
            TagsInput.prototype.init = function(opts){
                this.options = opts ? Object.assign(this.options, opts) : this.options;

                if(this.initialized)
                    this.destroy();

                if(!(this.orignal_input = document.getElementById(this.options.selector)) ){
                    console.error("tags-input couldn't find an element with the specified ID");
                    return this;
                }

                this.arr = [];
                this.wrapper = document.createElement('div');
                this.input = document.createElement('input');
                init(this);
                initEvents(this);

                this.initialized =  true;
                return this;
            }

            // Add Tags
            TagsInput.prototype.addTag = function(string){

                if(this.anyErrors(string))
                    return ;

                this.arr.push(string);
                var tagInput = this;

                var tag = document.createElement('span');
                tag.className = this.options.tagClass;
                tag.innerText = string;

                var closeIcon = document.createElement('a');
                closeIcon.innerHTML = '&times;';

                // delete the tag when icon is clicked
                closeIcon.addEventListener('click' , function(e){
                    e.preventDefault();
                    var tag = this.parentNode;

                    for(var i =0 ;i < tagInput.wrapper.childNodes.length ; i++){
                        if(tagInput.wrapper.childNodes[i] == tag)
                            tagInput.deleteTag(tag , i);
                    }
                })


                tag.appendChild(closeIcon);
                this.wrapper.insertBefore(tag , this.input);
                this.orignal_input.value = this.arr.join(',');

                return this;
            }

            // Delete Tags
            TagsInput.prototype.deleteTag = function(tag , i){
                tag.remove();
                this.arr.splice( i , 1);
                this.orignal_input.value =  this.arr.join(',');
                return this;
            }

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function(string){
                if( this.options.max != null && this.arr.length >= this.options.max ){
                    console.log('max tags limit reached');
                    return true;
                }

                if(!this.options.duplicate && this.arr.indexOf(string) != -1 ){
                    console.log('duplicate found " '+string+' " ')
                    return true;
                }

                return false;
            }

            // Add tags programmatically
            TagsInput.prototype.addData = function(array){
                var plugin = this;

                array.forEach(function(string){
                    plugin.addTag(string);
                })
                return this;
            }

            // Get the Input String
            TagsInput.prototype.getInputString = function(){
                return this.arr.join(',');
            }


            // destroy the plugin
            TagsInput.prototype.destroy = function(){
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function(key){
                    if(self[key] instanceof HTMLElement)
                        self[key].remove();

                    if(key != 'options')
                        delete self[key];
                });

                this.initialized = false;
            }

            // Private function to initialize the tag input plugin
            function init(tags){
                tags.wrapper.append(tags.input);
                tags.wrapper.classList.add(tags.options.wrapperClass);
                tags.orignal_input.setAttribute('hidden' , 'true');
                tags.orignal_input.parentNode.insertBefore(tags.wrapper , tags.orignal_input);
            }

            // initialize the Events
            function initEvents(tags){
                tags.wrapper.addEventListener('click' ,function(){
                    tags.input.focus();
                });


                tags.input.addEventListener('keydown' , function(e){
                    var str = tags.input.value.trim();

                    if( !!(~[9 , 13 , 188].indexOf( e.keyCode ))  )
                    {
                        e.preventDefault();
                        tags.input.value = "";
                        if(str != "")
                            tags.addTag(str);
                    }

                });
            }


            // Set All the Default Values
            TagsInput.defaults = {
                selector : '',
                wrapperClass : 'tags-input-wrapper',
                tagClass : 'tag',
                max : null,
                duplicate: false
            }

            window.TagsInput = TagsInput;
        })();

        var tagInput1 = new TagsInput({
            selector: 'tag-input1',
            duplicate : false,
            max : 10
        });
        tagInput1.addData([])

    </script>

@endsection



