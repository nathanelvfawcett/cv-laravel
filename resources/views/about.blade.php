@extends('layout')
@section('content')
  <section id="about">
	    <div>
	          <h1>Hi. I'm Nathan.<h1>
	      <img class="myImage" src="nathanfawcett.jpg" alt="Nathan Fawcett" border="3" style="width:300px;height:300px;"/>
	  </div>
	  <div>
	    <h1>About Me</h1>
	    <p>
              DevOps Engineer.<br>
              Graduated December 2022 from Lewis Univeristy as a Master of Science in Computer Science, concentration in Software Engineering.<br>
              Graduated December 2019 from Capella University as Bachelor of Science in Information Technology<br>
	      Certified as Microsoft Technology Associate in Database Fundamentals.
            </p>
	  </section>
            <section id="skills">

    <h2>Skills</h2>

    <table cellspacing="10" align="center">
    <tr>
    <td class="parent_table">
          <h3>Languages</h3>
          <table cellspacing="10" align="center" class="nested">
          <tr><td>Python</td><td>Java</td></tr>
          <tr><td>C#</td><td>C++</td></tr>
          <tr><td>PHP</td><td>SQL</td></tr>
          <tr><td>HTML</td><td>CSS</td></tr>
          <tr><td>Ansible</td><td>Bash</td></tr>
          <tr><td>YAML</td><td></td></tr>
          </table>

      </td>
    <td class="parent_table">
          <h3>Tools</h3>
        <table cellspacing="10" align="center" class="nested">
          <tr>Microsoft Studio</tr><br>
          <tr>Unreal Game Engine</tr><br>
          <tr>Unity Game Engine</tr><br>
          <tr>Jenkins</tr><br>
          <tr>Microsoft SQL Server<br>
          <tr>Android Studio</tr>
        </table>

    </td>
    </tr>
    </table>
    </tbody>
    </table>
  </div>
  <hr>
</section>

    </body>
@endsection
