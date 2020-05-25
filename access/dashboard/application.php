<?php include 'application.html';?>
<div class="form">
  <form class="login-form" action="insert.php" method="POST">
    <select name="club" class="sel">
        <option value="peerhealthmem">----Select Club----</option>
        <option value="ictmem">I.C.T Club</option>
        <option value="peerhealthmem">Peer Health Club</option>
        <option value="pressmem">Press Club</option>
        <option value="healthmem">Health & Sanitation Club</option>
        <option value="sciencemathmem">Science & Maths Club</option>
        <option value="librarymem">Library Committee</option>
        <option value="govhismem">GovHis</option>
        <option value="redcrossmem">Red Cross Association</option>
        <option value="bookmem">Book Club</option>
        <option value="farmassocmem">Young Farmers Association</option>
        <option value="sumemam">Scripture Union</option>
        <option value="amsamem">Ahmadiya Muslim Students Association</option>
        <option value="nicamem">Nusrat Islamic and Cultural Association</option>
        <option value="frenchmem">French Club</option>
    </select>
    <input type="text" placeholder="First Name" size="25" required="required" name="firstname" />
    <input type="text" placeholder="Last Name" size="25" required="required" name="lastname" />
    <input type="text" placeholder="Gender" size="7" required="required" name="gender" />
    <input type="text" placeholder="GR Number" size="5" required="required" name="grnumber" />
    <input type="text" placeholder="Grade" size="2" required="required" name="grade"/>
    <input type="text" placeholder="Field" size="8" required="required" name="field"/>
    <input type="text" placeholder="Class" size="9" required="required" name="class" />
    <input type="tel" placeholder="Phone" size="7" required="required" name="phone" />
    <input type="text" placeholder="Shift" size="9" required="required" name="shift" />
    <input type="text" style="display: none;" name="source" value="out" />
    <input type="text" style="display: none;" name="approve" value="false" />
    <textarea placeholder="Why do you want to join the club?" rows="4" required="required" name="whyjoin"></textarea>
    <textarea placeholder="What do you want to achieve with the club?" rows="4" required="required" name="achieve"></textarea>
    <textarea placeholder="What can you do for the club?" rows="4" required="required" name="dofor"></textarea>
    <button type="submit">Apply</button>
    <p class="message"></p>
  </form>
</div>

</body>
</html>
