CREATE DATABASE `school`;

CREATE TABLE teachers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  -- photo VARCAR(255),
  -- name VARCHAR(100),
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  email VARCHAR(100),
  phone VARCHAR(15),
  -- department VARCHAR(50),
  hire_date DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE courses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE classes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  course_id INT,
  teacher_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (course_id) REFERENCES courses(id)
    ON DELETE CASCADE,
  FOREIGN KEY (teacher_id) REFERENCES teachers(id)
    ON DELETE SET NULL
);

CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  -- photo VARCAR(255),
  -- name VARCHAR(100),
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  email VARCHAR(100),
  phone VARCHAR(15),
  enrollment_date DATE,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE registrations (
  id INT AUTO_INCREMENT PRIMARY KEY,
  student_id INT,
  class_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (student_id) REFERENCES students(id)
    ON DELETE CASCADE,
  FOREIGN KEY (class_id) REFERENCES classes(id)
    ON DELETE CASCADE
);
