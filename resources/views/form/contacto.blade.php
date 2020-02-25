<!DOCTYPE html>
<html>
<body>
    <table border="1">
        @foreach( $elementos AS $k => $v )
        @isset( $$k )
        <tr>
            <td><strong>{{ $v }}:</strong></td>
            <td>{{ $$k }}</td>
        </tr>
        @endisset
        @endforeach
    </table>
</body>
</html>