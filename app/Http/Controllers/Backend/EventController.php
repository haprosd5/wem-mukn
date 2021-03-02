<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use App\Http\Controllers\Controller;
use App\Tintuc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    //
    public function getEvent()
    {
        $data = ['Events'];
        $listNews = Tintuc::where('cate_id', 2)->paginate(15);
        return view('backend.event.list_event')->with(['data' => $data, 'list_news' => $listNews]);
    }

    public function getAddEvent()
    {
        $data = ['Event', 'Thêm sự kiện'];
        return view('backend.event.add_event')->with('data', $data);
    }

    public function postAddEvent(Request $request)
    {
        $this->validate($request,
            [
                'title' => 'required|unique:news',
                'descriptions' => 'required',
                'content' => 'required',
                //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                'feature_img' => 'mimes:jpg,jpeg,png,gif|max:2048',
            ],
            [
                'title.required' => 'Tiêu đề không được để trống',
                'title.unique'=>'Tên tiêu đề trùng lặp',
                'descriptions.required' => 'Trích yếu không được để trống',
                'content.required' => 'Nội dung không được để trống',
                //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                'feature_img.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                'feature_img.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            ]);

        // tao doi tuong bai viet
        $tintuc = new Tintuc();
        $tintuc->setConnection('mysql');
        $tintuc->title = trim($request->title);
        $tintuc->slug = Str::slug(trim($request->title), '-');
        $tintuc->descriptions = trim($request->descriptions);
        $tintuc->cate_id = 2;
        // đặt author cho bài viết
        $tintuc->author = Admin::find(1)->id;
        $tintuc->content = $request->content;
        


        // Lưu hình thẻ đại diện
        if ($request->hasFile('feature_img')) {
            // Lưu hinh anh vao thu muc upload/feature_img
            $image = $request->file('feature_img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('upload/feature_img'), $filename);
            $tintuc->feature_img = $request->file('feature_img')->getClientOriginalName();
        } else {
            $tintuc->feature_img = 'https://via.placeholder.com/150';
        }

        // đặt trạng thái cho bài viết
        if ($request->has('submit_save')) {
            $tintuc->status = false;
            $tintuc->save();
            return redirect('admin/events/add-event')->with('success', 'Lưu event thành công');
        } else if ($request->has('submit_post')) {
            $tintuc->status = true;
            $tintuc->save();
            return redirect('admin/events')->with('success', 'Đăng tải event thành công');
        }
    }

    public function getEditEvent($id)
    {
        $data = ['Events', 'Sửa event'];
        $new = Tintuc::find($id);
        return view('backend.event.edit_event')->with(['data' => $data, 'new' => $new]);
    }

    public function postEditEvent(Request $request, $id)
    {
        $this->validate($request,
            [
                'title' => 'required',
                'descriptions' => 'required',
                'content' => 'required',
                //Kiểm tra đúng file đuôi .jpg,.jpeg,.png.gif và dung lượng không quá 2M
                'feature_img' => 'mimes:jpg,jpeg,png,gif|max:2048',
            ],
            [
                'title.required' => 'Tiêu đề không được để trống',
                'descriptions.required' => 'Trích yếu không được để trống',
                'content.required' => 'Nội dung không được để trống',
                //Tùy chỉnh hiển thị thông báo không thõa điều kiện
                'feature_img.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                'feature_img.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
            ]);

        // cap nhat thong tin bai viet neu thay doi
        $tintuc = Tintuc::find($id);
        $tintuc->setConnection('mysql');
        $tintuc->title = trim($request->title);
        $tintuc->slug = Str::slug(trim($request->title), '-');
        $tintuc->descriptions = trim($request->descriptions);
        $tintuc->content = $request->content;



        // Lưu hình thẻ đại diện new thay doi
        if ($request->hasFile('feature_img')) {
            // Lưu hinh anh vao thu muc upload/feature_img
            $image = $request->file('feature_img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('upload/feature_img'), $filename);
            $tintuc->feature_img = $request->file('feature_img')->getClientOriginalName();
        }

        // đặt trạng thái cho bài viết
        if ($request->has('submit_save')) {
            $tintuc->status = false;
            $tintuc->save();
            return redirect('admin/events/add-event')->with('success', 'Lưu event thành công');
        } else if ($request->has('submit_post')) {
            $tintuc->status = true;
            $tintuc->save();
            return redirect('admin/events')->with('success', 'Cập nhật event thành công');
        }
    }

    public function getDeleteEvent($id) {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();

        return redirect('admin/events')->with('success', 'Bạn đã xóa thành công');
    }
}
