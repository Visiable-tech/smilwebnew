@include('admin.common.header')

@php 

$start = 171;
$end = 831;

echo "INSERT INTO `post_meta_elements` (`post_id`) VALUES \n";

for ($i = $start; $i <= $end; $i++) {
    echo "($i)";
    echo ($i == $end) ? ";\n" : ",\n";
}



@endphp


@include('admin.common.footer')