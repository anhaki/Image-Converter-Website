<table width="500" align="center">
    <tr>
        <td align="center">
            Image Converted to {{ ucfirst($convert_type) }}
            <img src="uploads/{{ $imageName }}" alt="Converted Image" />
        </td>
    </tr>
    <tr>
        <td align="center">
            <a href="{{ route('download', ['filepath' => $target_dir.'/'.$image]) }}">Download Converted Image</a>
        </td>
       
    </tr>
    <tr>
         <td  align="center">
            <a href="{{ route('share', ['filepath' => $target_dir.'/'.$image]) }}">Share Converted Image</a>
        </td>
    </tr>
    <tr>
        {{-- <td align="center"><a href="{{ route('index') }}">Convert Another</a></td> --}}
    </tr>
</table>
