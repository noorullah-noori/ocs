<!DOCTYPE html>
<html>
<head>
	<title>Journalist Registeration Form Data</title>
</head>
<body>
<table>
  <thead>
    <tr>
      <th style="padding:15px;">Name</th>
      <th style="padding:15px;">Licence Number</th>
      <th style="padding:15px;">License Issue Date</th>
      <th style="padding:15px;">Coverage Area</th>
      <th style="padding:15px;">Coverage Type</th>
      <th style="padding:15px;">Broadcasting Language</th>
      <th style="padding:15px;">Address</th>
      <th style="padding:15px;">Email1</th>
      <th style="padding:15px;">Email2</th>
      <th style="padding:15px;">Email3</th>
      <th style="padding:15px;">Phone1</th>
      <th style="padding:15px;">Phone2</th>
      <th style="padding:15px;">Phone3</th>
      <th style="padding:15px;">Website</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="padding:15px;">{{$media->name}}</td>
      <td style="padding:15px;">{{$media->license_number}}</td>
      <td style="padding:15px;">{{$media->license_date}}</td>
      <td style="padding:15px;">{{$media->type}}</td>
      <td style="padding:15px;">{{$media->coverage_area}}</td>
      <td style="padding:15px;">{{$media->coverage_type}}</td>
      <td style="padding:15px;">{{$media->broadcasting_language}}</td>
      <td style="padding:15px;">{{$media->address}}</td>
      <td style="padding:15px;">{{$media->email1}}</td>
      <td style="padding:15px;">{{$media->email2}}</td>
      <td style="padding:15px;">{{$media->email3}}</td>
      <td style="padding:15px;">{{$media->phone1}}</td>
      <td style="padding:15px;">{{$media->phone2}}</td>
      <td style="padding:15px;">{{$media->phone3}}</td>
      <td style="padding:15px;">{{$media->website}}</td>
      <td style="padding:15px;">{{$media->facebook}}</td>
      <td style="padding:15px;">{{$media->twitter}}</td>
    </tr>

    <br><br>
    <tr>
    <h3>News Director</h3>
    <br><br>
      <th style="padding:15px;">Name</th>
      <th style="padding:15px;">Email</th>
      <th style="padding:15px;">Telephone</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
    </tr>


    <tr>
      <td style="padding:15px;">{{$director->name}}</td>
      <td style="padding:15px;">{{$director->email}}</td>
      <td style="padding:15px;">{{$director->telephone}}</td>
      <td style="padding:15px;">{{$director->facebook}}</td>
      <td style="padding:15px;">{{$director->twitter}}</td>
    </tr>
    <br><br>
    <tr>
    <h3>First Journalist</h3>
    <br><br>
      <th style="padding:15px;">Name</th>
      <th style="padding:15px;">Email</th>
      <th style="padding:15px;">Telephone</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
    </tr>


    <tr>
      <td style="padding:15px;">{{$journalist1->name}}</td>
      <td style="padding:15px;">{{$journalist1->email}}</td>
      <td style="padding:15px;">{{$journalist1->telephone}}</td>
      <td style="padding:15px;">{{$journalist1->facebook}}</td>
      <td style="padding:15px;">{{$journalist1->twitter}}</td>
    </tr>
<br><br>
     <tr>
    <h3>Second Journalist</h3>
    <br><br>
      <th style="padding:15px;">Name</th>
      <th style="padding:15px;">Email</th>
      <th style="padding:15px;">Telephone</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
    </tr>


    <tr>
      <td style="padding:15px;">{{$journalist2->name}}</td>
      <td style="padding:15px;">{{$journalist2->email}}</td>
      <td style="padding:15px;">{{$journalist2->telephone}}</td>
      <td style="padding:15px;">{{$journalist2->facebook}}</td>
      <td style="padding:15px;">{{$journalist2->twitter}}</td>
    </tr>

      <tr>
        <br><br>
    <h3>Reporter</h3>
    <br><br>
      <th style="padding:15px;">Name</th>
      <th style="padding:15px;">Email</th>
      <th style="padding:15px;">Telephone</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
    </tr>


    <tr>
      <td style="padding:15px;">{{$reporter->name}}</td>
      <td style="padding:15px;">{{$reporter->email}}</td>
      <td style="padding:15px;">{{$reporter->telephone}}</td>
      <td style="padding:15px;">{{$reporter->facebook}}</td>
      <td style="padding:15px;">{{$reporter->twitter}}</td>
    </tr>
<br><br>
      <tr>
    <h3>Secretary</h3>
    <br><br>
      <th style="padding:15px;">Name</th>
      <th style="padding:15px;">Email</th>
      <th style="padding:15px;">Telephone</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
    </tr>


    <tr>
      <td style="padding:15px;">{{$secretary->name}}</td>
      <td style="padding:15px;">{{$secretary->email}}</td>
      <td style="padding:15px;">{{$secretary->telephone}}</td>
      <td style="padding:15px;">{{$secretary->facebook}}</td>
      <td style="padding:15px;">{{$secretary->twitter}}</td>
    </tr>

  </tbody>
</table>

</body>
</html>