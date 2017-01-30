$(".edu-field").append(\''.$form->field($edu, 'edu_sname[]')->textInput(['maxlength' => true, 'placeholder'=> 'School name'])->label(false).'\');
				$(".edu-field").append(\''.$form->field($edu, 'edu_qualify[]')->textInput(['maxlength' => true, 'placeholder'=> 'Qualification(s)'])->label(false).'\');
				$(".edu-field").append(\''.$form->field($edu, 'edu_start[]')->textInput()->label(false).'\');
				$(".edu-field").append(\''.$form->field($edu, 'edu_end[]')->textInput()->label(false).'\');
				$(".edu-field").append(\''.$form->field($edu, 'edu_note[]')->textarea(['rows' => 5, 'placeholder'=> 'Note'])->label(false).'\');