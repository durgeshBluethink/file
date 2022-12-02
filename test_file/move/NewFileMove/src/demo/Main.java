package demo;


import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.util.stream.Stream;

public class Main {
    public static void main(String[] args) {
        try {

            Path src = Paths.get("//home//development//checking//");
            Path dest = Paths.get("//home//development//checking1//");

            // create stream for `src`walk
            Stream<Path> files = Files.walk(src);

            // copy all files and folders from `src` to `dest`
            files.forEach(file -> {

                System.out.println(file.getFileName());
                File newFile = new File(String.valueOf(file.getFileName()));
                if(newFile.getName().endsWith(".jpg")){

                    try {
                        Files.copy(file, dest.resolve(src.relativize(file)),StandardCopyOption.REPLACE_EXISTING);
                        //                    Files.delete(file);
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
                }

            });


            // close the stream
            files.close();

        } catch (IOException ex) {
            ex.printStackTrace();
        }
    }
}