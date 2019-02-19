<? php
echo '{% extends 'Encuestas/base.html' %}';
echo '';
echo '{% block main_content %}';
echo '';
echo '{% if latest_question_list %}';
echo '<ul>';
echo '{% for question in latest_question_list %}';
echo '<li type="square" style="color:green"><a href="{% url 'Encuestas:detail' question.id %}">{{ question.question_text }}</a></li>';
echo '{% endfor %}';
echo '</ul>';
echo '{% else %}';
echo '<p>No polls are available.</p>';
echo '{% endif %}';
echo '';
echo '{% endblock %}';
?>
