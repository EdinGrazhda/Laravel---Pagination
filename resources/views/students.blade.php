<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<center>
<table style="border:1px solid black;border-collapse:collapse;margin-top:2%">
    <tr>
        <td style="border:1px solid black;">Name</td>
        <td style="border:1px solid black;">Email</td>
    </tr>
    @foreach($students as $list)
    <tr>
        <td style="border:1px solid black;">{{ $list->name }}</td>
        <td style="border:1px solid black;">{{ $list->email }}</td>
    </tr>
    @endforeach
</table>
<div class="d-flex justify-content-center align-items-center mt-5">
    {{ $students->links('pagination::bootstrap-4') }}
</div>
</center>