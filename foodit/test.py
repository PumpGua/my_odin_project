import tensorflow as tf, sys, argparse

def main(args):
    image_data = tf.gfile.FastGFile(args.image_path, 'rb').read()
    label_lines = [line.rstrip() for line
        in tf.gfile.GFile('output_labels.txt')]
    with tf.gfile.FastGFile('output_graph.pb', 'rb') as f:
        graph_def = tf.GraphDef()
        graph_def.ParseFromString(f.read())
        _ = tf.import_graph_def(graph_def, name='')
    with tf.Session()