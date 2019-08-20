@extends('layouts.app')
@section('content')
<form action="rwehu.php" method="POST">
        <center><table border="2" width="400" height="300">
        <tr>
        <td colspan="5" align="center" bgcolor="grey"> <h2>student login information</td></h2>
        </tr>
        
        <tr>
        
        
        <td align="right">name:</td><td><input type="text" name="name">
        </td>
        </tr>
        <tr>
        <td align="right">email:</td>
        <td><input type="text" name="email"></td>
        </tr>
        <tr>
        <td align="right" > stu_id</td><td><input type="text" name="stu_id"></td>
        </tr>
        <tr>
        <td colspan="5" align ="center"> <input type="submit" id="submit" name="submit"></td>
        </tr>
        </table>
        </form>
@endsection