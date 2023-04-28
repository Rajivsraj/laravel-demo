@extends('includes.adminLayout')

@section('main_content')
    <div id="wrap">
        <div class="clear" style="height:5px;"></div>
        <form method="post" action="{{ route('name_add_sub_category') }}">
            <div id="wrap2">
                <h1>Add Sub Category</h1>
                <br>
                @if (session('data'))
                    {{ session('data') }}
                @endif
                <div class="form-raw">
                    <div class="form-name">Select Category</div>
                    @csrf
                    <div class="form-txtfld">
                        <select name="category_id">
                            <option>Select Option</option>
                            @isset($allSubCat)
                                @if ($allSubCat)
                                    @foreach ($allSubCat as $cat)
                                        <option value="{{ $cat['id'] }}">{{ $cat['cat_name'] }}</option>
                                    @endforeach
                                @endif
                            @endisset
                        </select>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="form-raw">
                    <div class="form-name">Add Sub Category</div>
                    <div class="form-txtfld">
                        <input type="text" name="sub_cat">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="form-raw">
                <div class="form-name">Active</div>
                <div class="form-txtfld">
                    <input type="checkbox" name="sub_cat_status">
                </div>
                <div class="clear"></div>
            </div>


            <div class="form-raw">
                <div class="form-name">&nbsp;</div>
                <div class="form-txtfld" style="width:290px;">
                    <input type="submit" name="add_sub_category" class="btn" value="Submit">
                </div>
            </div>
        </form>
    </div>
    <div class="clear">&nbsp;</div>
    </div>
    <div id="wrap3">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
            <tr>
                <th width="59" align="left" valign="middle">Sr.No.</th>
                <th width="752" align="left" valign="middle">Category Name</th>
                <th width="752" align="left" valign="middle">Sub Category Name</th>
                <th width="77" align="left" valign="middle">Status</th>
                <th width="54" align="left" valign="middle">Edit</th>
                <th width="71" align="left" valign="middle">Remove</th>
            </tr>
            @isset($allSubCat)
                @foreach ($allSubCat as $subCat)
                   
                    @for ($i = 0; $i < count($subCat['sub_category_rel']); $i++)
                        <tr>
                            <td align="left" valign="top">1</td>
                            <td align="left" valign="top">{{ $subCat['cat_name'] }}</td>
                            <td align="left" valign="top">
                                {{ $subCat['sub_category_rel'][$i]['sub_cat_name'] }}
                            </td>
                            <td align="left" valign="top">
                                <strong>
                                    @if ($subCat['sub_category_rel'][$i]['sub_cat_status'] == 1)
                                        <span class="text-success">Active</span>
                                    @else
                                        <span class="text-danger">Deactive</span>
                                    @endif

                                </strong>
                            </td>
                            <td align="left" valign="top"><a href="#">Edit</a></td>
                            <td align="center" valign="top">
                                <a href="#">
                                    <img src="images/icon-bin.jpg" alt="" width="25" height="25" border="0"
                                        align="absmiddle" />
                                </a>
                            </td>
                        </tr>
                    @endfor
                @endforeach
            @endisset

        </table>
        <div class="clear">&nbsp;</div>
    </div>
    <div class="clear"></div>
@endsection
