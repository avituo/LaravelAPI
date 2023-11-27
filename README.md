# API-DDM

API dedicated to access an students database.

## GET STUDENTS

- http://127.0.0.1:8000/api/students

This HTTP GET request is used to retrieve information about students from the API. The request is sent to the URL http://127.0.0.1:8000/api/students.

The response returned from the last execution of this request had a status code of 200, indicating a successful response. The response body contained a JSON array with student information. Each student object in the array has the following properties:

- id: An integer representing the unique identifier of the student.
- name: A string representing the name of the student.
- course: A string representing the course in which the student is enrolled.
- Please note that the actual values for name, course were not provided in the response for privacy reasons.

To use this endpoint, you can send an HTTP GET request to the specified URL. The response will contain an array of student objects with their respective properties as described above.

It is important to note that this endpoint does not require any request parameters.

Please ensure that you have the necessary permissions and authentication to access this API endpoint.

## POST STUDENTS

- [http://127.0.0.1:8000/api/students](http://127.0.0.1:8000/api/students?name={name}&course={course})

This HTTP POST request is used to add a new student to the API. The request should be sent to the endpoint http://127.0.0.1:8000/api/students with the following query parameters:

- name (string): The name of the student.
- course (string): The course the student is enrolled in.

The request should be sent with the appropriate values for the name and course parameters.
The response to this request will have a status code of 201, indicating that the request was successful. The response body will contain the details of the newly created student, including the following fields:

- name (string): The name of the student.
- course (string): The course the student is enrolled in.
- id (integer): The unique identifier for the student.

Please note that the actual values for name, course and id will be specific to the newly created student and will not be empty or zero as shown in the example response.
Make sure to include the appropriate values for the name and course parameters in the request to successfully add a new student.

### Query Parameters
name(required)            {name} <br>
course(required)          {course}

## PUT STUDENTS

- http://localhost:8000/api/students/{id}?name={name}&course={course}

This API endpoint allows you to update the information of a student by sending an HTTP PUT request to the specified URL. The request should include the student's ID in the URL path, and the updated name and course as query parameters.

### Path Parameters

- id (required): The ID of the student to be updated. Replace {id} in the URL with the actual ID.

### Query Parameters

- name (required): The updated name of the student. Replace {name} in the URL with the actual name.
- course (required): The updated course of the student. Replace {course} in the URL with the actual course.

## DELETE STUDENTS

- http://localhost:8000/api/students/{id}

This API endpoint allows you to delete a student record by providing the student ID in the URL path.
To delete a student, make an HTTP DELETE request to http://localhost:8000/api/students/{id}, where {id} is the unique identifier of the student you want to delete.

### Path Parameters

- id (required): The ID of the student to be deleted. Replace {id} in the URL with the actual ID.
 
