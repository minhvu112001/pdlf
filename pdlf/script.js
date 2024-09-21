let students = [];
let nextId = 1;

// Function to render the student list
function renderStudentList() {
    const studentList = document.getElementById('studentList');
    studentList.innerHTML = '';
    students.forEach(student => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${student.id}</td>
            <td>${student.name}</td>
            <td>${student.age}</td>
            <td>${student.address}</td>
            <td>${student.telephone}</td>
        `;
        studentList.appendChild(row);
    });
}

// Event listener for the form submission
document.getElementById('studentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const studentName = document.getElementById('studentName').value;
    const studentAge = document.getElementById('studentAge').value;
    const studentAddress = document.getElementById('studentAddress').value;
    const studentTelephone = document.getElementById('studentTelephone').value;

    students.push({
        id: nextId++,
        name: studentName,
        age: parseInt(studentAge),
        address: studentAddress,
        telephone: studentTelephone
    });

    renderStudentList();
    document.getElementById('studentForm').reset();
});

// Initial rendering
renderStudentList();
