<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShareBaiVietRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cc' => 'required|min:6|max:255',
            'hinh'=>'required|mimes:jpeg,jpg,png,gif',
            'describe'=>'required|min:10',
            'phut'=>'numeric|required',
            'songuoian'=>'required|numeric|min:1',
            'names.*'=>'required',
            'numbers.*'=>'required',
            'motas.*'=>'required',
            'hinh_steps.*'=>'required|mimes:jpeg,jpg,png,gif'

        ];
    }
    public function messages(){
        return [
            'cc.required' => 'Bạn chưa nhập tên món ăn',
            'cc.min' => 'Tên ít nhất là 6 kí tự',
            'cc.max' => 'Tên nhiều nhất 255 kí tự',
            'hinh.required'=>'Bạn chưa thêm hình ảnh cho món ăn',
            'hinh.mines'=>'File hình ảnh không đúng định dạng',
            'describe.required'=>'Hãy mô tả về món ăn của bạn',
            'describe.min'=>'Hãy mô tả về món ăn của bạn nhỏ nhất 20 kí tự',
            'phut.required'=>'Nhập số thời gian thực hiện',
            'phut.numeric'=>'Thời gian thực hiện là số',
            'songuoian.required'=>'Số người ăn',
            'songuoian.numeric'=>'Số người ăn bạn nhập không phải là số',
            'songuoian.min'=>'Số người ăn nhỏ nhất là 1',
            'names.*.required'=>'Điền đầy đủ tên nguyên liệu',
            'numbers.*.required'=>'Điền đủ số lượng ',
            'motas.*.required'=>'Hãy mô tả đủ các bước',
            'hinh_steps.*.mines'=>'Hãy chắc chắn định dạng file ảnh',
            'hinh_steps.*.required'=>'Thêm hình cho các bước'
        ];
    }
}
