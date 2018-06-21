<!DOCTYPE html>
<html>
<head>
	<title>Expert Registeration Form Data</title>
</head>
<body>
<table class="ui celled table">
  <thead>
    <tr>
      <th style="padding:15px;">Expert Name</th>
      <th style="padding:15px;">Last Name</th>
      <th style="padding:15px;">Father Name</th>
      <th style="padding:15px;">Nationality</th>
      <th style="padding:15px;">Passport</th>
      <th style="padding:15px;">Email1</th>
      <th style="padding:15px;">Email2</th>
      <th style="padding:15px;">Email3</th>
      <th style="padding:15px;">Phone1</th>
      <th style="padding:15px;">Phone2</th>
      <th style="padding:15px;">Phone3</th>
      <th style="padding:15px;">Decsipline</th>
      <th style="padding:15px;">Facebook</th>
      <th style="padding:15px;">Twitter</th>
      <th style="padding:15px;">Linked in</th>
      <th style="padding:15px;">Type</th>
      <th style="padding:15px;">Type Text</th>
      <th style="padding:15px;">Language</th>
      <th style="padding:15px;">Starting Date</th>
      <th style="padding:15px;">Specialization</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="padding:15px;">{{$expert->name}}</td>
      <td style="padding:15px;">{{$expert->last_name}}</td>
      <td style="padding:15px;">{{$expert->father_name}}</td>
      <td style="padding:15px;">{{$expert->nationality}}</td>
      <td style="padding:15px;">{{$expert->passport}}</td>
      <td style="padding:15px;">{{$expert->email1}}</td>
      <td style="padding:15px;">{{$expert->email2}}</td>
      <td style="padding:15px;">{{$expert->email3}}</td>
      <td style="padding:15px;">{{$expert->phone1}}</td>
      <td style="padding:15px;">{{$expert->phone2}}</td>
      <td style="padding:15px;">{{$expert->phone3}}</td>
      <td style="padding:15px;">{{$expert->discipline}}</td>
      <td style="padding:15px;">{{$expert->facebook}}</td>
      <td style="padding:15px;">{{$expert->twitter}}</td>
      <td style="padding:15px;">{{$expert->linked_in}}</td>
      <td style="padding:15px;">{{$expert->type}}</td>
      <td style="padding:15px;">{{$expert->type_text}}</td>
      <td style="padding:15px;">{{$expert->language}}</td>
      <td style="padding:15px;">{{$expert->starting_date}}</td>
      <td style="padding:15px;">{{$expert->specialization}}</td>
    </tr>
  </tbody>
</table>

</body>
</html>