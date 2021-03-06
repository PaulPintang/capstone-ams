<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <title>Good day !!</title>
</head>
<body>
    <?php include('../students/student_attendance/studentprocess.php');?>
    <?php include('./attendancetable/profprocess.php');?>
    <div class="mx-auto flex flex-col items-center justify-center h-screen" style="max-width: 1100px;">
        <div class="self-start" style="margin-top: -80px">
            <h1 style="font-size: 3rem;">Let's start the class !!</h1>
        </div>
        <div  class="flex justify-around gap-9">
             <div class="self-center">
                <img src="../images/start2.svg" alt="" style="width: 600px">
            </div>
            <form action="./attendancetable/profprocess.php" method="POST">
                <div class="flex flex-col space-y-3 w-96">
                    <p class="text-sm"> <span class="text-yellow-600">Note: </span>The date and time is auto detect by the system once you submit your inputs. Thank you !!</p>
                    <p class="text-sm"><span class="text-yellow-600">Date today: </span> <?php echo $date;?></p>
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none" placeholder="Your name" name="profName" required>
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none" placeholder="Your subject" name="profSubject" required>
                    <div class="flex gap-2">
                        <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="Course and Year" name="classCourseY" required>
                        <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="No. of students" name="totalStud" required>
                        <!-- <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="Your class block" name="classBlock"> -->
                    </div>
                    <small style="font-size: 10px" class="text-gray-500">This timeout is the exact time to end the class: Example: type '12:00 AM '</small>
                    <input type="text" class="border-2 border-opacity-50 border-gray-400 rounded p-3 focus:border-yellow-500 focus:outline-none w-full" placeholder="type the exact time to end the class" name="timeOut">
                    <div class="flex justify-center">
                            <button class="rounded p-3 pl-5 pr-5 text-white w-full"
                            style="background-color: #FF8A00;"
                            type="submit" name="startclass">Let's Start</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>