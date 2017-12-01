/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ADS
 * Created: 01-dic-2017
 */
USE Dircrm
GO
CREATE TABLE incidence (
    idIncidence NUMERIC(11) IDENTITY(1,1) PRIMARY KEY NOT NULL,
    nameIncidence VARCHAR(250) NOT NULL,
    descriptionIncidence VARCHAR(500) NOT NULL,
    solutionIncidence VARCHAR(500) NOT NULL,
    dateIncidence DATETIME NOT NULL,
    dateSlutionIncidence DATETIME NOT NULL,
    priorityIncidence NUMERIC(2) NOT NULL,
    recurrenceIncidence NUMERIC NOT NULL,
    impactIncidence NUMERIC(2) NOT NULL,
    leveIncidence VARCHAR(100) NOT NULL,
    origenIncidence NUMERIC(11) NOT NULL,
    userModiffy NUMERIC(11) NOT NULL,
    statusIncidence NUMERIC(1) NOT NULL DEFAULT 1
);
GO
