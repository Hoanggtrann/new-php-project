<h1>đây là trang test: lấy dữ liệu</h1>
<br>
<!-- dung vong lap de lay du lieu ra -->
<!-- $user la biến được tạo trong controller -->
<table>
@foreach ($user as $item) 
    <tr>
        <td>{{($loop->index+1)}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->password}}</td>
    </tr>
    @endforeach

</table>

