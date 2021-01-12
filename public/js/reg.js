$(function(){

   $('#show-grades').hide()
   $('#special-need').hide()    
   $('#need').hide()    
  $('#selected-class').hide()
  

    $('#lesson-subjects').multiselect();

    $('#goals').empty()
    $('#grades').hide()

    $('#lesson-subjects').empty()
    
    var selectedClass=''

    $('#lesson-class').change(function(){
        const lessonClass = $(this).val()
        console.log(lessonClass)
        // console.log(lessonClass.match(/Nursery/i));
        
        // showing selected class
        selectedClass = lessonClass
        $('#selected-class').html('Lesson class: ' + selectedClass)
        $('#selected-class').show()
    

        
        if(lessonClass == 'Pre-Nursery') {
            // console.log('Nur')
            loadData( '#goals', prenurseryGoals)
            loadSubject(prenurserySubjects)
            window.classPrice = prices.nursery

            console.log(window.classPrice)

            return

        }
        if(lessonClass == 'Nursery 1' || lessonClass == 'Nursery 2') {
            // console.log('Nur')
            loadData( '#goals', nurseryGoals)
            loadSubject(nurserySubjects)

            window.classPrice = prices.nursery

            console.log(window.classPrice)

            return

        }
        
        if(lessonClass == 'Primary 1' || lessonClass == 'Primary 2' 
            || lessonClass == 'Primary 3' || lessonClass == 'Primary 4' 
            || lessonClass == 'Primary 5' || lessonClass == 'Primary 6') {
                window.classPrice = prices.primary
            // console.log('primary')
            
            console.log(window.classPrice)

            loadData('#goals', primaryGoals)
            loadSubject(primarySubjects)
            return 
        }
        if(lessonClass == 'JSS 1' || lessonClass == 'JSS 2' 
            || lessonClass == 'JSS 3') {
             console.log('jss')

            loadData('#goals', JssGoals)
            loadSubject(JssSubjects)
            window.classPrice = prices.jss
            console.log(window.classPrice)

            return 
        }
        if(lessonClass == 'SSS 1' || lessonClass == 'SSS 2' 
            || lessonClass == 'SSS 3') {
                window.classPrice = prices.sss
            console.log(window.classPrice)

            loadData('#goals', SssGoals)
            loadSubject(SssSubjects)
            return 
        }

    });


    $('#goals').change(function(){
      //  console.log('am here')
        const selectedGoal = $(this).val()
        if (selectedGoal == 'Improve grade') {
            $('#show-grades').show()
            $('#grades').show()

            $('#special-need').hide()
            $('#need').hide()
        } else if (selectedGoal == 'Special need support') {
            $('#special-need').show()
            $('#need').show()

            $('#show-grades').hide()
            $('#grades').hide()

        }else {
            $('#show-grades').hide()
            $('#grades').hide()
            $('#special-need').hide()
            $('#need').hide()
        }

    })

    

})

function loadData(selector, goals) {
    $(selector)
    .empty()
    .append(goals)
}


function loadSubject(subjects) {
    // $('#lesson-subjects option:selected').each(function() {
    //     $(this).prop('selected', false);
    // })
    // $('#lesson-subjects').multiselect('refresh');

    $('#lesson-subjects').multiselect('dataprovider', subjects);
    $('#lesson-subjects').multiselect('rebuild');
}

const prenurseryGoals = `
        <option value='0' selected>select a goals</option>
        <option>Improve phonics, reading and writing</option>
        <option>Help with assignments and school work</option>
        <option>Build foundation and confidence</option>
        <option>Homeschooling</option>
        <option>Special needs support</option>`;

const prenurserySubjects = [
    {label: 'Literacy', title:'Literacy', value:'Literacy'},
    {label: 'Numeracy', title:'Numeracy', value:'Numeracy'},
    {label: 'Phonics', title:'Phonics', value:'Phonics'},
]

const nurseryGoals = `
        <option value='0' selected>select a goal</option>
        <option>Improve phonics, reading and writing</option>
        <option>Help with assignments and school work</option>
        <option>Build foundation and confidence</option>
        <option>Homeschooling</option>
        <option>Special needs support</option>`;

const nurserySubjects = [
    {label: 'Literacy', title:'Literacy', value:'Literacy'},
    {label: 'Numeracy', title:'Numeracy', value:'Numeracy'},
    {label: 'Phonics', title:'Phonics', value:'Phonics'},
]

const primaryGoals = `
                    <option value='0' selected>Select a goal</option>
                    <option>Help with assigment and school work</option>
                    <option>Improve phonics,reading,and writing</option>
                    <option>Entrance exam preparation</option>
                    <option>Prepare for school tests and exam</option>
                    <option>Improve grade </option>
                    <option>home schooling</option>
                    <option>Special need support</option>

                    `
const primarySubjects = [
    {label: 'Basic Mathematics', title:'Basic Mathematics', value:'Basic Mathematics'},
    {label: 'English', title:'English', value:'English'},
    {label: 'Basic Sciences', title:'Basic Sciences', value:'Basic Sciences'},
    {label: 'Verbal Reasoning', title:'Verbal Reasoning', value:'Verbal Reasoning'},
    {label: 'Quantitative Reasoning', title:'Quantitative Reasoning', value:'Quantitative Reasoning'},
    
]

const JssGoals = `
                    <option value='0' selected>Select a goal</option>
                    <option>Checkpoint exam preparation</option>
                    <option>Prepare for JSCE/BECE</option>
                    <option>Entrance exam preparation</option>
                    <option>Prepare for school test and exam</option>
                    <option>Improve grade </option>
                    <option>Help with assignments and school work</option>
                    <option>home schooling</option>
                    <option>Special need support</option>

                    `
const JssSubjects = [
    {label: 'General Mathematics', title:'General Mathematics', value:'Basic Mathematics'},
    {label: 'English', title:'English', value:'English'},
    {label: 'Basic Sciences', title:'Basic Sciences', value:'Basic Sciences'},
    {label: 'Basic Technology', title:'Basic Technology', value:'Basic Technology'},
    {label: 'Business Technology', title:'Business Technology', value:'Business Technology'},
    {label: 'ICT-Computer Science', title:'ICT-Computer Science', value:'ICT-Computer Science'},
    
]

const SssGoals = `
                    <option value='0' selected>Select a goal</option>
                    <option>IGCSE preparation</option>
                    <option>SSCE/NECO/GCE Preparation</option>
                    <option>UTME/JAMB Preparation</option>
                    <option>SAT exam preparation</option>
                    <option>ACT exam preparation</option>
                    <option>Prepare for school tests and exam</option>
                    <option>Improve grades</option>
                    <option>Help with assignments and school work</option>
                    <option>Homeschooling</option>
                    <option> Special needs support</option>
                    
                    `

const SssSubjects = [
    //GENERAL SUBJECT
    {label: 'General Mathematics', title:'General Mathematics', value:'Basic Mathematics'},
    {label: 'English', title:'English', value:'English'},
    {label: 'ICT-Computer Science', title:'ICT-Computer Science', value:'ICT-Computer Science'},
    
    //SCIENCE
    {label: 'Chemistry', title:'Chemistry', value:'Chemistry'},
    {label: 'Physics', title:'Physics', value:'Physics'},
    {label: 'Biology', title:'Biology', value:'Biology'},
    {label: 'Further Mathematics', title:'Further Mathematics', value:'Further Mathematics'},
    {label: 'Geography', title:'Geography', value:'Geography'},
    {label: 'Agricultural Science', title:'Agricultural Science', value:'Agricultural Science'},
    {label: 'Technical Drawing', title:'Technical Drawing', value:'Technical Drawing'},
    
    //COMMERCIAL
    {label: 'Economics', title:'Economics', value:'Economics'},
    {label: 'Commerce', title:'Commerce', value:'Commerce'},
    {label: 'Accounting', title:'Accounting', value:'Accounting'},

    //ART
    {label: 'Literature-in-English', title:'Literature-in-English', value:'Literature-in-English'},
    {label: 'Commerce', title:'Commerce', value:'Commerce'},
    {label: 'Government', title:'Government', value:'Government'},
    {label: 'Fine Art', title:'Fine Art', value:'Fine Art'},
    {label: 'History', title:'History', value:'History'},
    






]

const prices = {
    nursery: 5082,
    primary: 5082,
    jss: 5943,
    sss: 5943
}

const hourlyPricesDiscount = {
    oneAndHalf: 600,
    twoHours: 900,
    threeHours: 950
}