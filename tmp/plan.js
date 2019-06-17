*** DRX ***

GOAL: In Table => Fetch Domains, Fetch Questions (For Modal), Total per questions 
 and Answer all questions depending on selecting domain(s).

1.) TABLENAME: [drxassessment_assessment]

    FIELDS: - drxassessment_id (Primary Key - AI)

   - drxassessment_question1 (Question Name)

   - drxassessment_domain (Subjects)

   - drxassessment_q1_answer_1 (Choices Option A)

   - drxassessment_q1_answer_2 (Choices Option B)

   - drxassessment_q1_answer_3 (Choices Option C)

   - drxassessment_q1_answer_4 (Choices Option D)

   - drxassessment_answer (Correct Answer for Answer Choices)

   - drxassessment_order (Question Order)


(FETCH DATA TO START ASSESSMENT)
2.) SELECT drxassessment_assessment tbl || TABLENAME: [drxassessment_student_assessment] => [drxassessment_assessment]

    FIELDS: - drxassessment_id (Primary Key - AI)

   	 - drxassessment_question_id (id of drxassessment_assessment tbl) && (INNERJOIN - SELECT(t1.drxassessment_id))

 	   - drxassessment_question_total (Total of Question Depends on Domain) && (INNERJOIN - COUNT(drxassessment_question1) WHERE(t1.drxassessment_domain=t2.drxassessment_student_domain))

   	 - drxassessment_student_domain (Selected Domain)

   	 - drxassessment_student_question (Selected Question)
   
     - drxassessment_student_answer (Student Answer for Choices)




2.) TABLENAME: [drxassessment_student_result] => [drxassessment_student_assessment]

    FIELDS: - drxassessment_id (Primary Key - AI)

   	- drxassessment_student_id ([drxassessment_student_assessment] ID)

   	- drxassessment_student_total_answers_ns (Number Sense)

   	- drxassessment_student_total_answers_maf (Memorization of Arithmetic Facts)

   	- drxassessment_student_total_answers_ac (Accurate Calculation)

   	- drxassessment_student_total_answers_fc (Fluent Calculation)

   	- drxassessment_student_total_answers_mra (Mathematical Reasoning and Application)



ID                  DOMAIN                  TOTAL QUESTIONS                  ACTION

1              Arithmetic Facts                  27                           START


2                Number Sense                    31                           START


3              Fluent Algorithm                  18                           START