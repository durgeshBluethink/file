package org.kodejava.commons.io;//import org.springframework.util.FileSystemUtils;


import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.util.stream.Stream;
import java.lang.reflect.Field;

public class Main {
    public static void main(String[] args) {
        try {
            // source & destination directories
            Path src = Paths.get("/home/development/java/test_file/bluethink");
            Path dest = Paths.get("/home/development/java/test_file/bt");

            // create stream for `src`
            Stream<Path> files = Files.walk(src);

            // copy all files and folders from `src` to `dest`
            files.forEach(file -> {
                System.out.println(file.getFileName());
                if(file.getFileName().endsWith(".jpg")){
                    try {
                        Files.copy(file, dest.resolve(src.relativize(file)),StandardCopyOption.REPLACE_EXISTING);
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