import org.springframework.util.FileSystemUtils;

import java.io.File;
import java.io.IOException;

public class Main {
    public static void main(String[] args) {
        File src = new File("/home/data/src");
        File dest = new File("/home/data/dest");

        try {
            FileSystemUtils.copyRecursively(src, dest);
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}