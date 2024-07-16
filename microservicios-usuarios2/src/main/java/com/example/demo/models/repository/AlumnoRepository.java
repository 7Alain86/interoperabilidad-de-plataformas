package com.example.demo.models.repository;

import org.springframework.data.repository.CrudRepository;

import com.example.demo.models.entity.Alumno;

public interface AlumnoRepository extends CrudRepository<Alumno, Long> {

}
