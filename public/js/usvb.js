
/* when a user clicks on a unit, we want to display the lists of students who are assigned to that unit.
*     @params int unitID
*     @params array students
*
* To generate the new list of students, build a series of DOM elements
*  for each student including their name and student ID.
* Each wrapping div includes a link to the student details page
*
* Dom node structure pseudocode:
* <div #students>
*    <a.student-link href="/student/{id}">
*      <div>
*        <span.student-name [.female | .male]>{student_name}</span>
*        <span.student-id>{id}</span>
*      </div>
*    </a>
*    . . . [repeat for each student] . . .
* </div>
*/
function handleUnitClick(unitId, students){
  document.getElementById('unit-name').innerHTML ='Unit #'+unitId;

  let studentEl= document.getElementById('students');
  studentEl.innerHTML=''; //clear out the previous list of students

  students.forEach((student)=>{

    //create dom element for student's name
    let studentNameEl= document.createElement('span');
    studentNameEl.setAttribute('class', 'student-name '+student.gender);
    studentNameEl.appendChild(document.createTextNode(student.name));

    //create dom element for student's id
    let studentIdEl= document.createElement('span');
    studentIdEl.setAttribute('class', 'student-id');
    studentIdEl.appendChild(document.createTextNode('ID: 0000'+student.student_id));

    //create dom element to link to student's details page
    let studentLink= document.createElement("a");
    studentLink.setAttribute('href', '/student/'+student.student_id)
    studentLink.setAttribute('class', 'student-link');

    //wrap the name and id elements inside the anchor element
    let studentWrapper= document.createElement('div');
    studentWrapper.appendChild( studentNameEl );
    studentWrapper.appendChild( studentIdEl );
    studentLink.appendChild(studentWrapper);

    //append the new student dom node tree to #students element
    studentEl.appendChild(studentLink);
  })
}
