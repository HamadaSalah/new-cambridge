<?php

namespace Database\Seeders;

use App\Models\CAS;
use App\Models\KG;
use App\Models\MYP;
use App\Models\Primary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KGSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KG::create([
            'sec1_head' => 'Want to know more
            about Kindergarten !',
            'sec1_p' => 'Students in the Secondary section are being prepared for the International Baccalaureate Diploma Programme. At different points in the upper grades; students will start their journey into the IB with activities in ATL Skills, internal assessments, CAS and TOK.

            The IB Programme is known and recognized worldwide as the finest pre-university education available. As a result, students who graduate with IB credentials have the choice to enter Jordanian universities or most universities aboard.',
            'sec1_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec2_head' => 'Want to know more about ?',
            'sec2_p' => 'Cambridge High School started implementing the IB middle years programme (MYP) in September 2016. It has been announced an authorized MYP world school by the International Baccalaureate Organization in December. 13th. 2018.',
            'sec2_img' => 'assets/images/Website pix/MYP/5Q7C8615.jpg',
            'sec3_head' => 'Want to know more about !',
            'sec3_p' => 'Cambridge High School started',
            'sec3_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec4_head' => 'Want to know more about !',
            'sec4_p' => 'We try to provide a developmentally appropriate curriculum that enhances the social, emotional, intellectual, aesthetic and physical development of each child while nurturing autonomy, self-esteem and success.

            In the Kindergarten and international sections of the upper grades, the English language is focused on throughout the day. At the same time, Arabic is reinforced with daily lessons.

            On entering grade one, students are fluent orally in both English and Arabic. Class size is kept to a maximum of 25 with one main teacher and in Kindergarten with an',
            'sec4_img' => 'assets/images/Website pix/IBDP/5Q7C3512.jpg',
        ]);
        Primary::create([
            'sec1_head' => 'Want to know more
            about Kindergarten !',
            'sec1_p' => 'Students in the Secondary section are being prepared for the International Baccalaureate Diploma Programme. At different points in the upper grades; students will start their journey into the IB with activities in ATL Skills, internal assessments, CAS and TOK.

            The IB Programme is known and recognized worldwide as the finest pre-university education available. As a result, students who graduate with IB credentials have the choice to enter Jordanian universities or most universities aboard.',
            'sec1_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec2_head' => 'Want to know more about ?',
            'sec2_p' => 'Cambridge High School started implementing the IB middle years programme (MYP) in September 2016. It has been announced an authorized MYP world school by the International Baccalaureate Organization in December. 13th. 2018.',
            'sec2_img' => 'assets/images/Website pix/MYP/5Q7C8615.jpg',
            'sec3_head' => 'Want to know more about !',
            'sec3_p' => 'Cambridge High School started',
            'sec3_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec4_head' => 'Want to know more about !',
            'sec4_p' => 'We try to provide a developmentally appropriate curriculum that enhances the social, emotional, intellectual, aesthetic and physical development of each child while nurturing autonomy, self-esteem and success.

            In the Kindergarten and international sections of the upper grades, the English language is focused on throughout the day. At the same time, Arabic is reinforced with daily lessons.
            
            On entering grade one, students are fluent orally in both English and Arabic. Class size is kept to a maximum of 25 with one main teacher and in Kindergarten with an',
            'sec4_img' => 'assets/images/Website pix/IBDP/5Q7C3512.jpg',
        ]);
        MYP::create([
            'sec1_head' => 'About the MYP programme',
            'sec1_p' => 'Cambridge High School started implementing the IB middle years programme (MYP) in September 2016. It has been announced an authorized MYP world school by the International Baccalaureate Organization in December. 13th. 2018.

            Cambridge High School offers the MYP over the following years. Year 0= grade 5 Year 2= grade 7 Year 1= grade 6 Year 3= grade 8 Please note that the word year is used to indicate grade (Year = Grade)',
            'sec1_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec2_head' => 'We consists of 8 subject groups (disciplines) Sciences, Mathematics, Digital Design, Individuals and Societies, Arts (Visual Arts and Music), Physical and health education, Languages – Arabic language and literature, English language and literature The programme provides learning in a broad base of disciplines (Subject-groups) to ensure that students acquire the knowledge and skills necessary to prepare them for the future.',
            'sec2_p' => 'The MYP system at CHS',
            'sec2_img' => 'assets/images/Website pix/MYP/5Q7C8615.jpg',
            'sec3_head' => 'Linking their learning experience to the real world',
            'sec3_p' => 'The Middle years’ programme is a concept-based programme, this allows students to be exposed to authentic learning environments. Students at CHS are aware that the MYP is based on conceptual understanding. This helps them develop principles, generalizations and theories that they take with them in the lifelong adventures of learning.

            In each subject group students are exposed to the following concepts: Key concepts: which represent the big ideas within subjects. Each subject group has four key concepts. Related concepts: which provide in-depth knowledge about each subject group.
            
            The programme encourages the use of a variety of teaching and learning methodologies to foster a climate in which students discover how they learn best in different situations.
            
            ',
            'sec3_img' => 'assets/images/Website pix/MYP/5Q7C9998.jpg',
            'sec4_head' => 'Let\'s learn how to learn !',
            'sec4_p' => 'Students develop skills that have relevance across the curriculum which help them “learn how to learn”. Approaches to Learning (ATL) skills can be learned, taught and improved with practice.They help students prepare for, and demonstrate learning through, meaningful assessment and enjoy a lifetime of learning.

            There are five ATL skill categories: Communication, Social skills, Self-management, Research, Thinking',
            'sec4_img' => 'assets/images/Website pix/IBDP/5Q7C3512.jpg',
            'sec5_head' => 'CHS assessment in the MYP',
            'sec5_p' => 'There are two types of assessments in the MYP, which include: Formative assessments: are assessments that take place during instruction (end of class, unit…etc.) in order for teachers to gauge where learning gaps are still evident and to make adjustments to instruction. Formative assessments are not recorded within MYP official grades. Summative assessments: allow students to transfer their knowledge and skills, formally measured by achievement levels within a criterion. (Differs from one subject group to another and from one level to another). Summative assessments are criterion based. There are related assessment criteria for each summative task. Each subject group has four prescribed criteria based on age-appropriate objectives. The objectives are the same from year to another but differ in their complexity. These criteria are applied when making a summative judgment about student’s achievement.

            Each criterion maximum achievement level is out of 8. A student can gain any achievement level from 0 – 8 based on his/her performance in the task. The total grade in an MYP subject is 32. Each criterion is out of 8 and there are four',
            'sec5_img' => 'assets/images/Website pix/MYP/267.jpg',
            'sec6_head' => 'Why MYP in CHS ?',
            'sec6_p' => 'Learning in the MYP uses global contexts in order to allow students to always ask the WHY? This encourages students to look at the subject matter through multiple/ different perspectives (points of view) building on the idea that there is more than a way to understand one another and to link knowledge to the world we live in.

            The MYP is an inclusive programme whose target is to provide learning for all students, including those with different learning styles, learning difficulties and special educational needs.
            
            Teachers and students incorporate technology in order to establish a wide range of sources of information that enhance teaching and learning. At CHS students are free to use the school library anytime and teachers usually take students to the MYP research lab to allow them to use a different range of sources.
            
            An essential part of the MYP is service as action. The programme believes in the importance of students learning to serve themselves, their families and the surrounding community. Each year, MYP students should perform one service as action activity and at the end of year-3 (grade 8) students are expected to perform a community project where they have a goal to achieve (MYP From principles into practice).
            
            The programme emphasizes the development of the whole person- effective, creative and physical – and its effective implementation depends on the school’s concern for the whole educational experience, including what students learn outside the classroom.
            
            The programme focuses on teachers and students engaging in reflection which leads to more meaningful results. This usually takes the form of questions, drawing, oral or written. At CHS each student has a reflection logbook divided into 8 binders (for the eight subject groups) and stays in school as this is considered confidential between students and their teachers.
            
            Academic honesty is at the core of the MYP just like all other IB programmes. Teachers and students are required to ensure the authenticity of the work done.
            
            The classroom environment in the school was modified and developed in a way that would fit the programme interaction requirements and allow teachers to enhance students learning. (Example: the round tables in classrooms).'
        ]);
        CAS::create([
            'sec1_head' => 'CAS PROGRAMME',
            'sec1_p' => 'CAS experiences are an important source of students’ personal knowledge, providing students with the opportunity to gain awareness of the world in a range of diverse and challenging situations. Shared knowledge extends the idea from how individuals construct',
            'sec1_img' => 'assets/images/Website%20pix/Home,About%20us/467.jpg',
            'sec2_head' => 'What is CAS?',
            'sec2_p' => 'CAS is at the heart of the Diploma Programme. With its holistic approach, CAS is designed to strengthen and extend students’ personal and interpersonal learning from the PYP and MYP.

            CAS is organized around the three strands of creativity, activity and service defined as follows:
            
            Creativity—exploring and extending ideas leading to an original or interpretive product or performance Activity—physical exertion contributing to a healthy lifestyle
            
            Service—collaborative and reciprocal engagement with the community in response to an authentic need',
            'sec3_head' => 'The Nature of CAS',
            'sec3_p' => 'CAS enables students to enhance their personal and interpersonal development. A meaningful CAS programme is a journey of discovery of self and others. For many, CAS is profound and life-changing. Each individual student has a different starting point and different needs and goals. A CAS programme is, therefore, individualized according to student interests, skills, values and background.

            The school and students must give CAS as much importance as any other element of the Diploma Programme and ensure sufficient time is allocated for engagement in the CAS programme. The CAS stages offer a helpful and supportive framework and continuum of process for CAS students. Successful completion of CAS is a requirement for the award of the IB Diploma.
            
            The CAS programme formally begins at the start of the Diploma Programme and continues regularly, ideally on a weekly basis, for at least 18 months with a reasonable balance between creativity, activity, and service. All CAS students are expected to maintain and complete a CAS portfolio as evidence of their engagement with CAS.',
            'sec3_img' => 'assets/images/Website pix/IBDP/5Q7C5247.jpg',
            'sec4_head' => 'What is CAS learning outcomes',
            'sec4_p' => 'Strongly committed to the principle of developing the whole person, the IB believes that this is best achieved by identifying and developing clearer and more explicit aims for and relationships between TOK, CAS and the extended essay. Support the interconnectedness of learning.

            Student completion of CAS is based on the achievement of the seven CAS learning outcomes realized through the student’s commitment to his or her CAS programme over a period of 18 months. These learning outcomes articulate what a CAS student is able to do at some point during his or her CAS programme.',
            'sec4_img' => 'assets/images/Website%20pix/MYP/5Q7C8615.jpg',
            'sec5_head' => 'What is CAS learning outcomes',
            'sec5_p' => 'In CAS, there are seven learning outcomes.

            LO 1- Identify own strengths and develop areas for growth
            
            LO 2- Demonstrate that challenges have been undertaken, developing new skills in the process
            
            LO 3- Demonstrate how to initiate and plan a CAS experience
            
            LO 4- Show commitment to and perseverance in CAS experiences
            
            LO 5- Demonstrate the skills and recognize the benefits of working collaboratively
            
            LO 6- Demonstrate engagement with issues of global significance
            
            LO 7- Recognize and consider the ethics of choices and actions',
            'sec5_img' => 'assets/images/Website%20pix/MYP/267.jpg',
            'sec6_head' => 'The Responsibility of CAS',
            'sec6_p' => 'CAS students are expected to:

            Approach CAS with a proactive attitude Develop a clear understanding of CAS expectations and the purpose of CAS Explore personal values, attitudes and attributes with reference to the IB learner profile and the IB mission statement Determine personal goals Discuss plans for CAS experiences with the CAS coordinator and/or CAS adviser Understand and apply the CAS stages where appropriate Take part in a variety of experiences, some of which are self-initiated, and at least one CASproject Become more aware of personal interests, skills and talents and observe how these evolve throughout the CAS programme
            
            Maintain a CAS portfolio and keep records of CAS experiences including evidence of achievement of the seven CAS learning outcomes
            
            Understand the reflection process and identify suitable opportunities to reflect on CASexperiences Demonstrate accomplishments within their CAS programme
            
            Communicate with the CAS coordinator/adviser and/or CAS supervisor in formal and informal meetings Ensure a suitable balance between creativity, activity and service in their CAS programme
            
            Behave appropriately and ethically in their choices and behaviours.',
            'sec7_head' => 'CAS Stages',
            'sec7_p' => 'The five CAS stages are as follows.

            1.Investigation: Students identify their interests, skills and talents to be used in considering opportunities for CAS experiences, as well as areas for personal growth and development. Students investigate what they want to do and determine the purpose for their CAS experience. In the case of service, students identify a need they want to address.
            
            2.Preparation: Students clarify roles and responsibilities, develop a plan of actions to be taken, identify specified resources and timelines, and acquire any skills as needed to engage in the CAS experience.
            
            3.Action: Students implement their idea or plan. This often requires decision-making and problem- solving. Students may work individually, with partners, or in groups.',
            'sec7_img' => 'assets/images/Website%20pix/CAS/068.jpg',
            'sec8_head' => 'CAS Stages',
            'sec8_p' => 'The five CAS stages are as follows.

            4.Reflection: Students describe what happened, express feelings, generate ideas, and raise questions. Reflection can occur at any time during CAS to further understanding, to assist with revising plans, to learn from the experience, and to make explicit connections between their growth, accomplishments, and the learning outcomes for personal awareness. Reflection may lead to new action.
            
            5.Demonstration: Students make explicit what and how they learned and what they have accomplished, for example, by sharing their CAS experience through their CAS portfolio or with others in an informal or formal manner. Through demonstration and communication, students solidify their understanding and evoke response from others.
            
            ',
            'sec8_img' => 'assets/images/Website%20pix/IBDP/5Q7C3512.jpg',
        ]);
    }
}
