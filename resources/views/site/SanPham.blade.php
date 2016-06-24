@extends('site.master')
@section('content')
    <h1>Sản Phẩm</h1>
    <table border="1" cellpadding="0">
        <tr>
            <th width="10%">ID</th>
            <th width="20%">Name</th>
            <th width="20%">Category</th>
        </tr>

        <?php
            print_r($data);
        ?>
    </table>

@endsection